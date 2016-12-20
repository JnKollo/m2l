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
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();

            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
            $formations = $formationRepository->getAllFormationsOrderByDate();

            $view = new View('Formation',"formations");
            $view->generate(array(
                'employee' => $employee,
                'formations' => $formations
            ));
        }else {
            header("Location: /index.php?controller=security&action=logout");
        }
    }

    public function test($pageNumber = 1) {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();

            $limit = 6;
            $offset = ($pageNumber - 1) * $limit;
            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
            $formations = $formationRepository->getAllFormationsOrderByDate();

            $totalRows = $formations['totalRows'];
            $numberOfPage = ceil($totalRows / $limit);

            if(isset($pageNumber)) {
                $currentPage = intval($pageNumber);

                if($currentPage > $numberOfPage) {
                    $currentPage = $numberOfPage;
                }
            } else {
                $currentPage = 1;
            }

            $view = new View('Formation',"all_formations");
            $view->generate(array(
                'employee' => $employee,
                'formations' => $formations,
                'totalRows' => $totalRows,
                'numberOfPage' => $numberOfPage,
                'currentPage' => $currentPage,
                'limit' => $limit,
                'offset' => $offset

            ));
        }else {
            header("Location: /index.php?controller=security&action=logout");
        }
    }

    public function show($idFormation) {
        if (isset($_SESSION["employee"])) {
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
            header("Location: /index.php?controller=security&action=logout");
        }
    }

}