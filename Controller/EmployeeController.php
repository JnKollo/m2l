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

    public function addFormation($idFormation)
    {
        $employeeRepository = new EmployeeRepository();
        $formationRepository = new FormationRepository();
        $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);

        $formation = $formationRepository->getOneFormationById($idFormation);

        if ($employee->getCreditsLeft() > $formation->getCredits() && $employee->getDaysLeft() > $formation->getDays()) {
            $employee->addFormation($_SESSION['employee']['id'], $idFormation);
        }

        $this->redirect('formation', 'show', $idFormation);
    }

    public function removeFormation($idFormation)
    {
        $employeeRepository = new EmployeeRepository();
        $formationRepository = new FormationRepository();
        $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);

        $formation = $formationRepository->getOneFormationById($idFormation);

        if ($employee->getCreditsLeft() > $formation->getCredits() && $employee->getDaysLeft() > $formation->getDays()) {
            $employee->removeFormation($_SESSION['employee']['id'], $idFormation);
        }

        $this->redirect('formation', 'show', $idFormation);
    }
}