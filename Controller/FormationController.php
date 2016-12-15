<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';

class FormationController extends Controller
{
    public function index() {
        $view = new View("formations");
        $view->generate(array(
            'employee' => unserialize($_SESSION['employee']),
            'formations' => unserialize($_SESSION['formations'])
        ));
    }
}