<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;
use M2l\Model\Repository\FormationRepository;
use M2l\Model\Repository\EmployeeFormationsRepository;
use M2l\Model\Repository\EmployeeRepository;

/**
 * Class EmployeeController
 */
class EmployeeController extends Controller
{
    public function index()
    {
    }

    /**
     * Ajoute une formation à la liste des formations demandées par l'employé
     */
    public function addFormation()
    {
        $idFormation = $this->request->getParameters('id');
        $employeeRepository = new EmployeeRepository();
        $employeeFormationRepository = new EmployeeFormationsRepository();
        $formationRepository = new FormationRepository();

        $employee = $employeeRepository->getOneById($_SESSION['employee']);
        $formation = $formationRepository->getOneById($idFormation);

        //Si les crédits et les jours de l'employé suffisent alors la souscription a la formation est validé
        if ($employee['credits_left'] > $formation['credits_left'] && $employee['days_left'] > $formation['days_left']) {
            $employeeFormationRepository->subscribeToFormation($employee['id'], $idFormation);

            //Si l'employé est un manager alors la demande d'ajout est acceptée
            if ($employee['manager_status']){
                $employeeFormationRepository->acceptFormation($employee['id'], $idFormation, $formation['credits'], $formation['days']);
            }
        }

        $this->redirect('formation', 'show', $idFormation);
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

        $employeeFormationRepository->unsubscribeToFormation($employee['id'], $idFormation);

        //Si l'employé est un manager alors la demande de retrait est acceptée
        if ($employee['manager_status']){
            $employeeFormationRepository->updateCreditsForManagerAfterUnsubscribe($employee['id'], $formation['credits']);
            $employeeFormationRepository->updateDaysForManageAfterUnsubscribe($employee['id'], $formation['days']);
        }
        $this->redirect('formation', 'show', $idFormation);
    }
}