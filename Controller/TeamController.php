<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Framework/Request.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/FormationRepository.php';

class TeamController extends Controller
{
    public function index()
    {
    }

    public function show()
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();

            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
            $team = $employeeRepository->getEmployeeByTeam($employee->getTeam());

            $view = new View('Team', "manage");
            $view->generate(array(
                'employee' => $employee,
                'team' => $team
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function manage($idTeamMember)
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();

            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
            $team = $employeeRepository->getEmployeeByTeam($employee->getTeam());
            $formation = $employeeRepository->getFormationsByEmployee($idTeamMember);

            $view = new View('Team', "manageFormation");
            $view->generate(array(
                'employee' => $employee,
                'team' => $team
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }
}