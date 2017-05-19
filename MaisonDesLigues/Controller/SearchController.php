<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;
use M2l\Model\Repository\FormationRepository;
use M2l\Model\Repository\EmployeeFormationsRepository;
use M2l\Model\Repository\EmployeeRepository;
use M2l\Service\Breadcrumb\BreadcrumbManager;
use M2l\Service\Status\StatusFormationManager;

class SearchController extends Controller
{
    /**
     *
     */
    public function index()
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $employeeFormationsRepository = new EmployeeFormationsRepository();

            $employee = $employeeRepository->getOneById($_SESSION['employee']);

            $employee->hydrate(array(
                'Formations' => $employeeFormationsRepository->getFormationsByEmployee($employee->getId())
            ));

            $this->generate('Search/index', array(
                'employee' => $employee,
                'breadcrumb' => BreadcrumbManager::searchFormationBreadcrumb()
            ));
        } else {
            $this->redirect('Security', 'logout');
        }
    }

    public function result()
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $employeeFormationsRepository = new EmployeeFormationsRepository();
            $formationRepository = new FormationRepository();

            $employee = $employeeRepository->getOneById($_SESSION["employee"]);
            $employeeFormations = $employeeFormationsRepository->getFormationsByEmployee($employee->getId());

            $queryParameters = $this->request->getAllParameters();

            $formations = $formationRepository->getFormationsBySearchQuery($queryParameters);

            StatusFormationManager::setStatusForEachFormation($formations, $employeeFormations);

            $this->generate('Search/result', array(
                'employee' => $employee,
                'formations' => $formations,
                'breadcrumb' => BreadcrumbManager::searchFormationBreadcrumb()
            ));
        } else {
            $this->redirect('Security', 'logout');
        }
    }
}
