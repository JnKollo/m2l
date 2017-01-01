<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Framework/Request.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/FormationRepository.php';
require_once 'Model/SecurityRepository.php';

class SearchController extends Controller
{
    public function index()
    {
    }

    public function result($parameters)
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();

            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']);
            $employeeFormations = $employee->getAjaxFormationsByEmployee($employee->getId());
            $searchFormation = $formationRepository->getFormationsBySearchQuery($parameters);

            foreach($searchFormation as $formation) {
                $formation['status'] = 'disponible';
                if(strtotime($formation['date']) < time()) {
                    $formation['status'] = 'indisponible';
                }

                if($employeeFormations){
                    foreach($employeeFormations as $myFormation) {
                        if($formation['id']== $myFormation['id']){
                            $formation['status'] = $myFormation['status']['state_of_validation'];
                        }
                    }
                }
            }
            header('Content-Type: application/json');
            echo json_encode(array(
                'formations' => $searchFormation
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

}