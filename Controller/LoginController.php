<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/SecurityRepository.php';

class LoginController extends Controller
{
    public function index() {
        if (isset($_SESSION['employee'])) {
            $this->redirect('Home', 'home');
        } else {
            $this->generate('Login/login', array('ok'));
        }
    }
}