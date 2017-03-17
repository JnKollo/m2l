<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;
use M2l\Model\Repository\FormationRepository;
use M2l\Model\Repository\EmployeeFormationsRepository;
use M2l\Model\Repository\EmployeeRepository;
use M2l\Service\Breadcrumb\BreadcrumbManager;


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

            $employee = $employeeRepository->getOneById($_SESSION['employee']);
            $team = $employeeRepository->getEmployeeByTeam($employee['team_id'], $employee['id']);

            foreach ($team as &$member) {
                if($member['id'] != $employee['id']) {
                    $pendingFormations = $employeeRepository->countPendingFormationsByEmployee($member['id']);
                    $member['pendingFormations'] = $pendingFormations;
                }
            }
            unset($member);
            $breadcrumb = BreadcrumbManager::teamBreadcrumb();

            $this->generate('Team/manage', array(
                'employee' => $employee,
                'team' => $team,
                'breadcrumb' => $breadcrumb
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function manage($parameters)
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $employeeFormationRepository = new EmployeeFormationsRepository();

            $idTeamMember = $parameters['id'];
            $employee = $employeeRepository->getOneById($_SESSION['employee']);
            $member = $employeeRepository->getOneEmployeeByTeam($idTeamMember);
            $pendingFormationsForEmployee = $employeeFormationRepository->getPendingFormationsByEmployee($idTeamMember);

            foreach($pendingFormationsForEmployee as $formation){
                $formation['date'] = date('d/m/Y', strtotime($formation['date']));
            }

            $breadcrumb = BreadcrumbManager::manageTeamBreadcrumb();

            $this->generate('Team/manageFormation', array(
                'employee' => $employee,
                'member' => $member,
                'pendingFormations' => $pendingFormationsForEmployee,
                'breadcrumb' => $breadcrumb
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function accept($parameters)
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();

            $idTeamMember = $parameters['id'];
            $idFormation = $parameters['formation'];
            $formation = $formationRepository->getOneById($idFormation);

            $employeeRepository->acceptFormation($idTeamMember, $idFormation, $formation['credits'], $formation['days']);

            $this->redirect('Team', 'manage', $idTeamMember);
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function refuse($parameters)
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();

            $idTeamMember = $parameters['id'];
            $idFormation = $parameters['formation'];
            $employeeRepository->refuseFormation($idTeamMember, $idFormation);

            $this->redirect('Team', 'manage', $idTeamMember);
        }else {
            $this->redirect('Security', 'logout');
        }
    }
}