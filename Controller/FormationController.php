<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';

class FormationController extends Controller
{
    public function index() {
        if ($_SESSION) {
            $formation = unserialize($_SESSION['formation']);
            $employee = unserialize($_SESSION['employee']);
            $view = new View("formations");
            $view->generate(array(
                'formation' => $formation,
                'employee' => $employee
            ));
        } else {
            $view = new View("error");
            $view->generate(array('msgErreur' => "page non trouvée"));
        }

    }
}