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
            $employeeFormations = $employee->getFormations();
            $searchFormation = $formationRepository->getSearchFormation($parameters);

            header('Content-Type: application/json');
            echo json_encode(array(
                'formations' => $searchFormation
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

}