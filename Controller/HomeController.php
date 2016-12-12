<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/FormationRepository.php';


class HomeController extends Controller
{
    public function index()
    {
    }

    public function home()
    {
        $formationRepository = new FormationRepository();
        $formations = $formationRepository->getAllFormationsOrderByDate();
        $_SESSION['formations'] = serialize($formations);

        $view = new View("home");
        $view->generate(array(
            'employee' => unserialize($_SESSION['employee']),
            'formations' => array_slice(unserialize($_SESSION['formations']), 0, 6, true)
        ));
    }

}