<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/SecurityRepository.php';

class LoginController extends Controller
{
    public function index() {
        if (isset($_SESSION['employee'])) {
            $this->redirect('home', 'home');
        } else {
            $view = new View('Login',"login");
            $data = ['ok'];

            $view->generateLogin($data);
        }
    }
}