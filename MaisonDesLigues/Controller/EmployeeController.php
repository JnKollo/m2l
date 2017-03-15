<?php

namespace M2l\Controller;

require_once 'Kernel/Controller.php';
require_once 'Kernel/Model.php';
require_once 'Kernel/Request.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/FormationRepository.php';

/**
 * Class EmployeeController
 */
class EmployeeController extends Controller
{
    public function index()
    {
    }

    /**
     * Ajoute une formation au formation demandées de l'employé
     *
     * @param $parameters
     */
    public function addFormation($parameters)
    {
        $idFormation = $parameters['id'];
        $employeeRepository = new EmployeeRepository();
        $formationRepository = new FormationRepository();

        $employee = $employeeRepository->getEmployeeById($_SESSION['employee']);
        $formation = $formationRepository->getOneFormationById($idFormation);

        //Si les crédits et les jours de l'employé suffisent alors la souscription a la formation est validé
        if ($employee->getCreditsLeft() > $formation->getCredits() && $employee->getDaysLeft() > $formation->getDays()) {
            $employee->subscribeToFormation($_SESSION['employee'], $idFormation);

            //Si l'employé est un manager alors la demande d'ajout est acceptée
            if ($employee->isMAnager()){
                $employee->acceptFormation($employee->getId(), $idFormation, $formation->getCredits(), $formation->getDays());
            }
        }

        $this->redirect('formation', 'show', $idFormation);
    }

    /**
     * Retire une formation de la liste des formations demandées à l'employé
     *
     * @param $parameters
     */
    public function removeFormation($parameters)
    {
        $idFormation = $parameters['id'];
        $employeeRepository = new EmployeeRepository();
        $formationRepository = new FormationRepository();

        $employee = $employeeRepository->getEmployeeById($_SESSION['employee']);
        $formation = $formationRepository->getOneFormationById($idFormation);

        $employee->unsubscribeToFormation($_SESSION['employee'], $idFormation);

        //Si l'employé est un manager alors la demande de retrait est acceptée
        if ($employee->isMAnager()){
            $employee->updateCreditsForManagerAfterUnsubscribe($employee->getId(), $formation->getCredits());
            $employee->updateDaysForManageAfterUnsubscribe($employee->getId(), $formation->getDays());
        }
        $this->redirect('formation', 'show', $idFormation);
    }
}