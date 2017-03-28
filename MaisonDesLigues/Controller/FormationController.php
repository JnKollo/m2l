<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;
use M2l\Model\Repository\FormationRepository;
use M2l\Model\Repository\EmployeeFormationsRepository;
use M2l\Model\Repository\EmployeeRepository;
use M2l\Service\Breadcrumb\BreadcrumbManager;
use M2l\Service\Status\StatusFormationManager;

/**
 * Class FormationController
 */
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

    /**
     * Action renvoyant les données de la page d'acceuil des formations
     */
    public function home() {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $employeeFormationsRepository = new EmployeeFormationsRepository();
            $formationRepository = new FormationRepository();

            $startYear = date('Y');
            $endYear = date("Y", strtotime(date("Y", strtotime($startYear)) . " + 1 year"));
            $limit = 10;
            $offset = 0;

            $employee = $employeeRepository->getOneById($_SESSION['employee']);
            $formations = $formationRepository->getAllFormationsOrderByDateAndPaginate($limit, $offset);

            $employee->hydrate(array(
                'Formations' => $employeeFormationsRepository->getFormationsByEmployeeOrderByDateAndPaginate($employee->getId(), $limit, $offset, $startYear, $endYear),
                'PerformedFormations' => $employeeFormationsRepository->getPerformedFormationsByEmployeeOrderByDateAndPaginate($employee->getId(), $limit, $offset)
            ));

            StatusFormationManager::setStatusForEachFormation($formations, $employee->getFormations());

            $this->generate('Formation/formations', array(
                'employee' => $employee,
                'formations' => $formations,
                'breadcrumb' => BreadcrumbManager::formationBreadcrumb()
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    /**
     *
     */
    public function show() {
        if (isset($_SESSION["employee"])) {
            $idFormation = $this->request->getParameters('id');

            $employeeRepository = new EmployeeRepository();
            $employeeFormationsRepository = new EmployeeFormationsRepository();
            $formationRepository = new FormationRepository();

            $employee = $employeeRepository->getOneById($_SESSION['employee']);
            $formation = $formationRepository->getOneById($idFormation);

            $employee->hydrate(array(
                'Formations' => $employeeFormationsRepository->getOneFormationByEmployee($employee->getId(), $formation->getId())
            ));

            StatusFormationManager::setStatusForOneFormation($formation, $employee->getFormations(), $isSubscribable = 1);

            $this->generate('Formation/editFormation', array(
                'employee' => $employee,
                'formation' => $formation,
                'isSubscribable' => $isSubscribable,
                'breadcrumb' => BreadcrumbManager::editFormationBreadcrumb()
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

    /**
     * @param $parameters
     */
    public function paginate() {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();

            $tableau = $this->request->getParameters('tableau');
            $page = $this->request->getParameters('page');

            $employee = $employeeRepository->getOneById($_SESSION['employee']);
            $employeeFormations = $employeeRepository->getAjaxFormationsByEmployee($employee['id']);

            $formations = [];
            $totalCount = 0;
            $limit = 10;
            $offset = 0;

            if (isset($tableau, $page)) {
                $currentPage = $page;
                $offset = ($currentPage - 1) * $limit;
                $startYear = date('Y');
                $endYear = date("Y", strtotime(date("Y", strtotime($startYear)) . " + 1 year"));

                $block = $tableau;
                if ($block == 'all') {
                    $formations = $formationRepository->getAjaxFormationsOrderByDateAndPaginate($limit, $offset);
                    $totalCount = $formationRepository->CountFormations();
                } elseif($block == 'myFormation') {
                    $formations = $employeeRepository->getAjaxFormationsByEmployeeOrderByDateAndPaginate($employee['id'], $limit, $offset, $startYear, $endYear);
                    $totalCount = $employeeRepository->countFormationsByEmployee($employee['id'], $startYear, $endYear);
                } elseif($block == 'performedFormation') {
                    $formations = $employeeRepository->getAjaxPerformedFormationsByEmployeeOrderByDateAndPaginate($employee['id'], $limit, $offset);
                    $totalCount = $employeeRepository->countPerformedFormationsByEmployee($employee['id']);
                }
            }

            StatusFormationManager::setStatusForEachFormation($formations, $employeeFormations);

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

    /**
     *
     */
    public function search() {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $formationRepository = new FormationRepository();
            $employeeFormationsRepository = new EmployeeFormationsRepository();

            $employee = $employeeRepository->getOneById($_SESSION['employee']);
            $formations = $formationRepository->getAllFormationsOrderByDate();

            $employee->hydrate(array(
                'Formations' => $employeeFormationsRepository->getFormationsByEmployee($employee->getId())
            ));

            StatusFormationManager::setStatusForEachFormation($formations, $employee->getFormations());

            $this->generate('Formation/searchFormation', array(
                'employee' => $employee,
                'formations' => $formations,
                'breadcrumb' => BreadcrumbManager::searchFormationBreadcrumb()
            ));
        }else {
            $this->redirect('Security', 'logout');
        }
    }

}