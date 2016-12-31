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

            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']);
            $employeeFormations = $employee->getFormations() ? array_slice($employee->getFormations(), 0, 6, true) : null;
            $performedFormations = $employeeRepository->countPerformedFormationsByEmployee($employee->getId());
            $pendingFormations = $employeeRepository->countPendingFormationsByEmployee($employee->getId());
            $team = $employeeRepository->getEmployeeByTeam($employee->getTeam(), $employee->getId());
            $formations = $formationRepository->getAllFormationsOrderByDate();

            $status = 'disponible';

            $view = new View('Home', "home");
            $view->generate(array(
                'employee' => $employee,
                'employeeFormations' => $employeeFormations,
                'formations' => array_slice($formations, 0, 6, true),
                'team' => $team,
                'performedFormations' => $performedFormations,
                'pendingFormations' => $pendingFormations,
                'status' => $status
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

}