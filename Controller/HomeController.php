<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/FormationRepository.php';
require_once 'Model/SecurityRepository.php';


class HomeController extends Controller
{
    public function index()
    {
    }

    public function home($employee, $formations)
    {
        $view = new View("home");
        $view->generate(array('employee' => $employee, 'formations' => $formations));
    }


}