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

    public function show($id) {
        $formationRepository = new FormationRepository();
        $formation = $formationRepository->getOneFormationById($id);
        $view = new View("editFormation");
        $view->generate(array(
            'employee' => unserialize($_SESSION['employee']),
            'formation' => $formation
        ));
    }

    public function edit() {

    }
}