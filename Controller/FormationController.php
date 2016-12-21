<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Framework/Request.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/FormationRepository.php';
require_once 'Model/SecurityRepository.php';

class FormationController extends Controller
{
    public function index() {
        if (isset($_SESSION['employee'])) {
            $this->redirect('Formation', 'home');
        } else {
            $view = new View('Login',"login");
            $data = ['ok'];

            $view->generateLogin($data);
        }
    }

    public function home($parameters = null) {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();

            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
            if($parameters['page']) {
                $pageNumber = $parameters['page'];
                $limit  = 10;
                $offset = ($pageNumber - 1)*$limit;

            }
            $formations = $formationRepository->getAllFormationsOrderByDateAndPaginate();

            $view = new View('Formation',"formations");
            $view->generate(array(
                'employee' => $employee,
                'formations' => $formations
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function show($parameters) {
        if (isset($_SESSION["employee"])) {
            $idFormation = $parameters['id'];
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();

            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
            $formation = $formationRepository->getOneFormationById($idFormation);
            $hasFormation = $employeeRepository->hasFormation($_SESSION['employee']['id'], $idFormation);

            $view = new View('Formation', "editFormation");
            $view->generate(array(
                'employee' => $employee,
                'formation' => $formation,
                'hasFormation' => $hasFormation
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

}