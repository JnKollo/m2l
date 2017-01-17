<?php

require_once 'BreadcrumbController.php';
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

    public function home() {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();

            $startYear = date('Y');
            $endYear = date("Y", strtotime(date("Y", strtotime($startYear)) . " + 1 year"));
            $limit = 10;
            $offset = 0;
            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']);
            $employeeFormations = $employeeRepository->getFormationsByEmployeeOrderByDateAndPaginate($employee->getId(), $limit, $offset, $startYear, $endYear);
            $performedFormations = $employeeRepository->getPerformedFormationsByEmployeeOrderByDateAndPaginate($employee->getId(), $limit, $offset);
            $formations = $formationRepository->getAllFormationsOrderByDateAndPaginate($limit, $offset);

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

            if($employee->getFormations()){
                foreach($employee->getFormations() as $formation) {
                    $formation->setDate(date('d/m/Y', strtotime($formation->getDate())));
                }
            }

            $breadcrumb = BreadcrumbController::formationBreadcrumb();

            $view = new View('Formation',"formations");
            $view->generate(array(
                'employee' => $employee,
                'employeeFormations' => $employeeFormations,
                'performedFormations' => $performedFormations,
                'formations' => $formations,
                'breadcrumb' => $breadcrumb
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

            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']);
            $formation = $formationRepository->getOneFormationById($idFormation);
            $hasFormation = $employeeRepository->hasFormation($employee->getId(), $idFormation);
            $isPendingFormation = $employeeRepository->isPendingFormation($idFormation, $employee->getId());
            $isAvailableFormation = $employeeRepository->isAvailableformation($idFormation, $employee->getId());
            $isValidateFormation = $employeeRepository->isValidateFormation($idFormation, $employee->getId());

            $isSubscribable = 1;
            $status = 'disponible';
            if (strtotime($formation->getDate()) <= time()) {
                $isSubscribable = 0;
                $status = 'indisponible';
            }
            if($employee->getFormations()) {
                foreach ($employee->getFormations() as $myFormation) {
                    if($myFormation->getId() == $formation->getId()){
                        if($isPendingFormation != 1) {
                            $isSubscribable = 0;
                            break;
                        }
                    }
                }
            }
            $formation->setDate(date('d/m/Y', strtotime($formation->getDate())));

            $view = new View('Formation', "editFormation");
            $view->generate(array(
                'employee' => $employee,
                'formation' => $formation,
                'hasFormation' => $hasFormation,
                'isPendingFormation' => $isPendingFormation,
                'isPerformedFormation' => $isAvailableFormation,
                'isSubscribable' => $isSubscribable,
                'isValidateFormation' => $isValidateFormation,
                'status' => $status
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function paginate($parameters) {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();

            $idEmployee = $_SESSION['employee'];
            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']);
            $employeeFormations = $employeeRepository->getAjaxFormationsByEmployee($employee->getId());

            $formations = [];
            $totalCount = 0;
            $limit = 10;
            $offset = 0;

            if (isset($parameters['tableau'], $parameters['page'])) {
                $currentPage = $parameters['page'];
                $offset = ($currentPage - 1) * $limit;
                $startYear = date('Y');
                $endYear = date("Y", strtotime(date("Y", strtotime($startYear)) . " + 1 year"));

                $block = $parameters['tableau'];
                if ($block == 'all') {
                    $formations = $formationRepository->getAjaxFormationsOrderByDateAndPaginate($limit, $offset);
                    $totalCount = $formationRepository->CountFormations();
                } elseif($block == 'myFormation') {
                    $formations = $employeeRepository->getAjaxFormationsByEmployeeOrderByDateAndPaginate($idEmployee, $limit, $offset, $startYear, $endYear);
                    $totalCount = $employeeRepository->countFormationsByEmployee($idEmployee, $startYear, $endYear);
                } elseif($block == 'performedFormation') {
                    $formations = $employeeRepository->getAjaxPerformedFormationsByEmployeeOrderByDateAndPaginate($idEmployee, $limit, $offset);
                    $totalCount = $employeeRepository->countPerformedFormationsByEmployee($idEmployee);
                }
            }



            foreach($formations as &$formation) {
                $formation['status'] = 'disponible';
                if(strtotime($formation['date']) < time()) {
                    $formation['status'] = 'indisponible';
                }

                if($employeeFormations){
                    foreach($employeeFormations as &$myFormation) {
                        if($formation['id']== $myFormation['id']){
                            $formation['status'] = $myFormation['state_of_validation'];
                        }
                    }
                }
                $formation['date'] = date('d/m/Y', strtotime($formation['date']));
            }
            unset($formation);
            unset($myFormation);

            if($employeeFormations){
                foreach($employeeFormations as $formation) {
                    $formation['date'] = date('d/m/Y', strtotime($formation['date']));
                }
            }

            header('Content-Type: application/json');
            echo json_encode(array(
                'maxRow' => $limit,
                'totalCount' => $totalCount,
                'formations' => $formations
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    public function search() {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();
            $employee = $employeeRepository->getEmployeeById($_SESSION['employee']);
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

            if($employee->getFormations()){
                foreach($employee->getFormations() as $formation) {
                    $formation->setDate(date('d/m/Y', strtotime($formation->getDate())));
                }
            }

            $view = new View('Formation', "searchFormation");
            $view->generate(array(
                'employee' => $employee,
                'formations' => $formations
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

}