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
            $employeeFormationsRepository = new EmployeeFormationsRepository();

            $employee = $employeeRepository->getOneById($_SESSION['employee']);
            $team = $employeeRepository->getEmployeeByTeam($employee->getTeam_id(), $employee->getId());

            foreach ($team as $member) {
                if($member->getId() != $employee->getId()) {
                    $member->setPendingFormations($employeeFormationsRepository->countPendingFormationsByEmployee($member->getId()));
                }
            }

            $this->generate('Team/manage', array(
                'employee' => $employee,
                'team' => $team,
                'breadcrumb' => BreadcrumbManager::teamBreadcrumb()
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function manage()
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $employeeFormationRepository = new EmployeeFormationsRepository();

            $idTeamMember = $this->request->getParameters('id');
            $employee = $employeeRepository->getOneById($_SESSION['employee']);
            $member = $employeeRepository->getOneEmployeeByTeam($idTeamMember);

            $member->hydrate(array(
               'PendingFormations' =>  $employeeFormationRepository->getPendingFormationsByEmployee($idTeamMember)
            ));

            $this->generate('Team/manageFormation', array(
                'employee' => $employee,
                'member' => $member,
                'breadcrumb' => BreadcrumbManager::manageTeamBreadcrumb()
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function accept()
    {
        if (isset($_SESSION["employee"])) {
            $employeeFormationsRepository = new EmployeeFormationsRepository();
            $formationRepository = new FormationRepository();

            $idTeamMember = $this->request->getParameters('id');
            $idFormation = $this->request->getParameters('formation');
            $formation = $formationRepository->getOneById($idFormation);

            $employeeFormationsRepository->acceptFormation($idTeamMember, $idFormation, $formation->getCredits(), $formation->getDays());

            $this->redirect(
                'Team',
                'manage',
                array(
                    'id' => $idTeamMember,
                    'state' => 'success'

            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function refuse()
    {
        if (isset($_SESSION["employee"])) {
            $employeeFormationsRepository = new EmployeeFormationsRepository();

            $idTeamMember = $this->request->getParameters('id');
            $idFormation = $this->request->getParameters('formation');

            $employeeFormationsRepository->refuseFormation($idTeamMember, $idFormation);

            $this->redirect('Team', 'manage', $idTeamMember);
        }else {
            $this->redirect('Security', 'logout');
        }
    }
}