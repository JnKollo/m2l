<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';

class SecurityController extends Controller
{
    public function index() {
        $view = new View("homepage");
        $data = $_POST;

        $employeeRepository = new EmployeeRepository();

        if ($employeeRepository->isAuthentificated($data()))

        $view->generate($data);
    }

}