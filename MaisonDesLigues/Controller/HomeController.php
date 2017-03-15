<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;
use M2l\Model\Repository\EmployeeRepository;
use M2l\Model\Repository\EmployeeFormationsRepository;
use M2l\Model\FormationRepository;
use M2l\Service\Status\StatusFormationManager;

class HomeController extends Controller
{
    public function index()
    {
    }

    public function home()
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $employeeFormationsRepository = new EmployeeFormationsRepository();
            $formationRepository = new FormationRepository();

            $employee = $employeeRepository->getOneById($_SESSION['employee']);

            $employeeFormations = $employeeFormationsRepository->getFormationsByEmployee($employee['id']);
            $performedFormations = $employeeFormationsRepository->countPerformedFormationsByEmployee($employee['id']);
            $pendingFormations = $employeeFormationsRepository->countPendingFormationsByEmployee($employee['id']);
            $team = $employeeRepository->getEmployeeByTeam($employee['team_id'], $employee['id']);
            $formations = $formationRepository->getAllFormationsOrderByDate();

            StatusFormationManager::setStatusForEachFormation($formations, $employeeFormations);

            $this->generate('Home/home', array(
                'employee' => $employee,
                'employeeFormations' => $employeeFormations,
                'formations' => array_slice($formations, 0, 6, true),
                'team' => $team,
                'performedFormations' => $performedFormations,
                'pendingFormations' => $pendingFormations
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

}