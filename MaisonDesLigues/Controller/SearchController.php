<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;
use M2l\Model\Repository\FormationRepository;
use M2l\Model\Repository\EmployeeFormationsRepository;
use M2l\Model\Repository\EmployeeRepository;
use M2l\Service\Status\StatusFormationManager;

class SearchController extends Controller
{
    public function index()
    {
    }

    public function result()
    {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $employeeFormationsRepository = new EmployeeFormationsRepository();
            $formationRepository = new FormationRepository();

            $employee = $employeeRepository->getOneById($_SESSION['employee']);

            $employeeFormations = $employeeFormationsRepository->getAjaxFormationsByEmployee($employee['id']);
            $searchFormation = $formationRepository->getFormationsBySearchQuery($this->request->getAllParameters());

            StatusFormationManager::setStatusForEachFormation($searchFormation, $employeeFormations);

            header('Content-Type: application/json');
            echo json_encode(array(
                'formations' => $searchFormation
            ));
        }
    }

}