<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;
use M2l\Model\Repository\FormationRepository;
use M2l\Model\Repository\EmployeeFormationsRepository;
use M2l\Model\Repository\EmployeeRepository;
use M2l\Model\Repository\FormationRequirementRepository;
use M2l\Service\Breadcrumb\BreadcrumbManager;
use M2l\Service\Status\StatusFormationManager;

/**
 * Class FormationController
 */
class FormationController extends Controller
{
    public function index() {
        if (isset($_SESSION['employee'])) {
            $this->redirect('Formation', 'lists');
        } else {
            $this->generate('Login/login');
        }
    }

    /**
     * Action renvoyant les données de la page d'acceuil des formations
     */
    public function lists() {
        if (isset($_SESSION["employee"])) {
            $employeeRepository = new EmployeeRepository();
            $employeeFormationsRepository = new EmployeeFormationsRepository();
            $formationRepository = new FormationRepository();

            $filter = $this->request->getParameters('filter');

            $employee = $employeeRepository->getOneById($_SESSION['employee']);

            $employee->hydrate(array(
                'Formations' => $employeeFormationsRepository->getFormationsByEmployee($employee->getId())
            ));

            $formations = null;
            if ($filter === 'all') {
                $formations = $formationRepository->getAllFormationsOrderByDate();
                StatusFormationManager::setStatusForEachFormation($formations, $employee->getFormations());
            } else {
                $formations = $employee->getFormations();
            }

            $this->generate('Formation/list_formations', array(
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
            $formationRequirementRepository = new FormationRequirementRepository();

            $employee = $employeeRepository->getOneById($_SESSION['employee']);
            $formation = $formationRepository->getOneById($idFormation);

            $employee->hydrate(array(
                'Formations' => $employeeFormationsRepository->getOneFormationByEmployee($employee->getId(), $formation->getId())
            ));

            $formation->hydrate(array(
                'requirement' => $formationRequirementRepository->getAllByFormationId($formation->getId())
            ));

            $isSubscribable = 1;
            StatusFormationManager::setStatusForOneFormation($formation, $employee->getFormations(), $isSubscribable);

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