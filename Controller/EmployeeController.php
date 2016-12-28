<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Framework/Request.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/FormationRepository.php';

class EmployeeController extends Controller
{
    public function index()
    {
    }

    public function addFormation($parameters)
    {
        $idFormation = $parameters['id'];
        $employeeRepository = new EmployeeRepository();
        $formationRepository = new FormationRepository();

        $employee = $employeeRepository->getEmployeeById($_SESSION['employee']);
        $formation = $formationRepository->getOneFormationById($idFormation);

        if ($employee->getCreditsLeft() > $formation->getCredits() && $employee->getDaysLeft() > $formation->getDays()) {
            $employee->subscribeToFormation($_SESSION['employee'], $idFormation);
            if ($employee->isMAnager()){
                $employee->acceptFormation($employee->getId(), $idFormation, $formation->getCredits(), $formation->getDays());
            }
        }

        $this->redirect('formation', 'show', $idFormation);
    }

    public function removeFormation($parameters)
    {
        $idFormation = $parameters['id'];
        $employeeRepository = new EmployeeRepository();
        $formationRepository = new FormationRepository();

        $employee = $employeeRepository->getEmployeeById($_SESSION['employee']);
        $formation = $formationRepository->getOneFormationById($idFormation);

        $employee->unsubscribeToFormation($_SESSION['employee'], $idFormation);
        if ($employee->isMAnager()){
            $employee->updateCreditsForManagerAfterUnsubscribe($employee->getId(), $formation->getCredits());
            $employee->updateDaysForManageAfterUnsubscribe($employee->getId(), $formation->getDays());
        }
        $this->redirect('formation', 'show', $idFormation);
    }
}