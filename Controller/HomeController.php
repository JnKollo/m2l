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

            foreach($formations as $formation) {
                $formation->setStatus('disponible');
                if(strtotime($formation->getDate()) < time()) {
                    $formation->setStatus('indisponible');
                }

                if($employee->getFormations()){
                    foreach($employee->getFormations() as $myFormation) {
                        if($formation->getId() == $myFormation->getId()){
                            $formation->setStatus($myFormation->getStatus()['state_of_validation']);
                        }
                    }
                }
                $formation->setDate(date('d/m/Y', strtotime($formation->getDate())));
            }

            $view = new View('Home', "home");
            $view->generate(array(
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