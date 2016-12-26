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
        $this->redirect('Team','show');
    }

    public function show()
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();

            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
            $team = $employeeRepository->getEmployeeByTeam($employee->getTeam(), $employee->getId());
            foreach ($team as $member) {
                if($member->getId() == $employee->getId()) {
                    unset($member);
                }
                $member->setPendingFormations($member->countPendingFormationByEmployee($member->getId()));
            }

            $view = new View('Team', "manage");
            $view->generate(array(
                'employee' => $employee,
                'team' => $team
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function manage($parameters)
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();

            $idTeamMember = $parameters['id'];
            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
            $member = $employeeRepository->getOneEmployeeByTeam($idTeamMember);

            $view = new View('Team', "manageFormation");
            $view->generate(array(
                'employee' => $employee,
                'member' => $member
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function accept($parameters)
    {
        if (isset($_SESSION["employee"])) {
            $member = new EmployeeRepository();

            $idTeamMember = $parameters['id'];
            $idFormation = $parameters['formation'];
            $member->acceptFormation($idTeamMember, $idFormation);

            $this->redirect('Team', 'manage', $idTeamMember);
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function refuse($parameters)
    {
        if (isset($_SESSION["employee"])) {
            $member = new EmployeeRepository();

            $idTeamMember = $parameters['id'];
            $idFormation = $parameters['formation'];
            $member->refuseFormation($idTeamMember, $idFormation);

            $this->redirect('Team', 'manage', $idTeamMember);
        }else {
            $this->redirect('Security', 'logout');
        }
    }
}