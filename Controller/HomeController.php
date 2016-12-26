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
            $employeeFormations = $employee->getFormations();
            $pastFormations = $employeeRepository->countValidateFormationByEmployee($employee->getId());
            $pendingFormations = $employeeRepository->countPendingFormationByEmployee($employee->getId());
            $team = $employeeRepository->getEmployeeByTeam($employee->getTeam(), $employee->getId());
            $formations = $formationRepository->getAllFormationsOrderByDate();

            $view = new View('Home', "home");
            $view->generate(array(
                'employee' => $employee,
                'employeeFormations' => array_slice($employeeFormations, 0, 6, true),
                'formations' => array_slice($formations, 0, 6, true),
                'team' => $team,
                'pastFormations' => $pastFormations,
                'pendingFormations' => $pendingFormations
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

}