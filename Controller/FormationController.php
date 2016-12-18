<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Framework/Request.php';

class FormationController extends Controller
{
    public function index() {
        $view = new View("formations");
        $view->generate(array(
            'employee' => unserialize($_SESSION['employee']),
            'formations' => unserialize($_SESSION['formations'])
        ));
    }

    public function show($idFormation) {
        $employeeRepository = new EmployeeRepository();
        $formationRepository = new FormationRepository();
        $formation = $formationRepository->getOneFormationById($idFormation);
        $hasFormation = $employeeRepository->hasFormation(unserialize($_SESSION['employee'])->getId(), $idFormation);
        $view = new View("editFormation");
        $view->generate(array(
            'employee' => unserialize($_SESSION['employee']),
            'formation' => $formation,
            'hasFormation' => $hasFormation
        ));
    }

    public function add($idFormation)
    {
        $employeeRepository = new EmployeeRepository();
        $employeeRepository->AddFormation(unserialize($_SESSION['employee'])->getId(), $idFormation);
        $_SESSION['employee'] = serialize($employeeRepository->refreshEmployeeData(unserialize($_SESSION['employee'])->getId()));
        $this->redirect('formation', 'show', $idFormation);
    }

    public function remove($idFormation)
    {
        $employeeRepository = new EmployeeRepository();
        $employeeRepository->RemoveFormation(unserialize($_SESSION['employee'])->getId(), $idFormation);
        $_SESSION['employee'] = serialize($employeeRepository->refreshEmployeeData(unserialize($_SESSION['employee'])->getId()));
        $this->redirect('formation', 'show', $idFormation);
    }

}