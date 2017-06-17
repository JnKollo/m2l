<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;
use M2l\Model\Repository\EmployeeCounterRepository;
use M2l\Model\Repository\FormationRepository;
use M2l\Model\Repository\EmployeeFormationsRepository;
use M2l\Model\Repository\EmployeeRepository;
use M2l\Service\Validation\EmployeeFormationChoice;

/**
 * Class EmployeeController
 */
class EmployeeController extends Controller
{
    /**
     * Ajoute une formation à la liste des formations demandées par l'employé
     */
    public function addFormation()
    {
        $idFormation = $this->request->getParameters('id');
        $employeeRepository = new EmployeeRepository();
        $employeeFormationsRepository = new EmployeeFormationsRepository();
        $formationRepository = new FormationRepository();

        $employee = $employeeRepository->getOneById($_SESSION['employee']);
        $formation = $formationRepository->getOneById($idFormation);

        //Si les crédits et les jours de l'employé suffisent alors la souscription a la formation est validé
        if ($employee->getCreditsLeft() > $formation->getCredits() && $employee->getDaysLeft() > $formation->getDays()) {
            $employeeFormationsRepository->subscribeToFormation($employee->getId(), $idFormation);

            //Si l'employé est un manager alors la demande d'ajout est acceptée
            if ($employee->getManager_status() && $employeeRepository->hasEnoughDays($employee->getId(), $formation->getDays())) {
                $employeeFormationsRepository->acceptFormation($employee->getId(), $idFormation, $formation->getCredits(), $formation->getDays());
            }
        }

        $this->redirect(
            'formation',
            'show',
            array(
                'id' => $idFormation
            ));
    }

    /**
     * Retire une formation de la liste des formations demandées à l'employé
     *
     */
    public function removeFormation()
    {
        $idFormation = $this->request->getParameters('id');
        $employeeRepository = new EmployeeRepository();
        $employeeFormationRepository = new EmployeeFormationsRepository();
        $formationRepository = new FormationRepository();

        $employee = $employeeRepository->getOneById($_SESSION['employee']);
        $formation = $formationRepository->getOneById($idFormation);

        $employeeFormationRepository->unsubscribeToFormation($employee->getId(), $idFormation);

        //Si l'employé est un manager alors la demande de retrait est acceptée
        if ($employee->getManager_status()) {
            $employeeFormationRepository->updateCreditsForManagerAfterUnsubscribe($employee->getId(), $formation->getCredits());
            $employeeFormationRepository->updateDaysForManageAfterUnsubscribe($employee->getId(), $formation->getDays());
            $employeeFormationRepository->updateCounterFormationByYearForEmployeeAfterRemove($employee->getId(), $formation->getDays(), $formation->getCredits());
        }

        $this->redirect(
            'formation',
            'show',
            array(
                'id' => $idFormation
            ));
    }

    public function validateEmployeeFormationChoice()
    {
        $employeeRepository = new EmployeeRepository();
        $employeeFormationChoice = new EmployeeFormationChoice();
        $employeeCounterRepository = new EmployeeCounterRepository();

        $formation['days'] = $this->request->getParameters('days');
        $formation['credits'] = $this->request->getParameters('credits');
        $id_employee = $this->request->parametersExist('id') ? $this->request->getParameters('id') : $_SESSION['employee'];

        $employee = $employeeRepository->getOneById($id_employee);

        $isEligibleForFormation = $employeeFormationChoice->isEligibleForFormation(
            array(
                'days_accumulated' => $employeeCounterRepository->getDaysAccumulated($id_employee),
                'credits_accumulated' => $employeeCounterRepository->getCreditsAccumulated($id_employee)
            ),
            $formation,
            array(
                'days_left' => $employee->getDaysLeft(),
                'credits_left' => $employee->getCreditsLeft()
            )
        );

        $this->jsonRender(array(
            'response' => $isEligibleForFormation
        ));
    }
}
