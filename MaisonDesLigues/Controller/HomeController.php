<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;
use M2l\Model\Repository\EmployeeRepository;
use M2l\Model\Repository\EmployeeFormationsRepository;
use M2l\Model\Repository\FormationRepository;
use M2l\Service\Status\StatusFormationManager;

class HomeController extends Controller
{
    public function home()
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $employeeFormationsRepository = new EmployeeFormationsRepository();
            $formationRepository = new FormationRepository();

            $employee = $employeeRepository->getOneById($_SESSION['employee']);

            $team = $employeeRepository->getEmployeeByTeam($employee->getTeam_id(), $employee->getId());
            $formations = $formationRepository->getAllFormationsOrderByDate();

            $employee->hydrate(array(
                'Formations' => $employeeFormationsRepository->getFormationsByEmployee($employee->getId()),
                'PendingFormations' => $employeeFormationsRepository->countPerformedFormationsByEmployee($employee->getId()),
                'PerformedFormations' => $employeeFormationsRepository->countPerformedFormationsByEmployee($employee->getId())
            ));

            StatusFormationManager::setStatusForEachFormation($formations, $employee->getFormations());

            $this->generate('Home/home', array(
                'employee' => $employee,
                'formations' => array_slice($formations, 0, 6, true),
                'team' => $team
            ));
        } else {
            $this->redirect('Security', 'logout');
        }
    }
}
