<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/FormationRepository.php';
require_once 'Model/SecurityRepository.php';

class HomeController extends Controller
{
    public function index()
    {
    }

    public function home()
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();

            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
            $pastFormations = $employeeRepository->getValidateFormationByEmployee($employee->getId());
            $pendingFormations = $employeeRepository->getPendingFormationByEmployee($employee->getId());
            $team = $employeeRepository->getEmployeeByTeam($employee->getTeam());
            $formations = $formationRepository->getAllFormationsOrderByDate();

            $view = new View('Home', "home");
            $view->generate(array(
                'employee' => $employee,
                'formations' => array_slice($formations, 0, 6, true),
                'team' => $team,
                'pastFormations' => $pastFormations,
                'pendingFormations' => $pendingFormations
            ));
        }else {
            header("Location: index.php?controller=security&action=logout");
        }
    }

}