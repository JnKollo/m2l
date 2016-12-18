<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Framework/Request.php';

class FormationController extends Controller
{
    public function index() {
        $employeeRepository = new EmployeeRepository();
        $formationRepository = new FormationRepository();

        $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
        $formations = $formationRepository->getAllFormationsOrderByDate();

        $view = new View("formations");
        $view->generate(array(
            'employee' => $employee,
            'formations' => $formations
        ));
    }

    public function show($idFormation) {
        $employeeRepository = new EmployeeRepository();
        $formationRepository = new FormationRepository();

        $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
        $formation = $formationRepository->getOneFormationById($idFormation);
        $hasFormation = $employeeRepository->hasFormation($_SESSION['employee']['id'], $idFormation);

        $view = new View("editFormation");
        $view->generate(array(
            'employee' => $employee,
            'formation' => $formation,
            'hasFormation' => $hasFormation
        ));
    }

    public function add($idFormation)
    {
        $employeeRepository = new EmployeeRepository();
        $employeeRepository->AddFormation($_SESSION['employee']['id'], $idFormation);

        $this->redirect('formation', 'show', $idFormation);
    }

    public function remove($idFormation)
    {
        $employeeRepository = new EmployeeRepository();
        $employeeRepository->RemoveFormation($_SESSION['employee']['id'], $idFormation);

        $this->redirect('formation', 'show', $idFormation);
    }

}