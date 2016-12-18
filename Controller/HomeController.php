<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';

class HomeController extends Controller
{
    public function index()
    {
    }

    public function home()
    {
        $employeeRepository = new EmployeeRepository();
        $formationRepository = new FormationRepository();

        $employee = $employeeRepository->getEmployeeById($_SESSION['employee']['id']);
        $formations = $formationRepository->getAllFormationsOrderByDate();

        $view = new View("home");
        $view->generate(array(
            'employee' => $employee,
            'formations' => array_slice($formations, 0, 6, true)
        ));
    }

}