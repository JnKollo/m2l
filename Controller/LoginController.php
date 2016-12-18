<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';

class LoginController extends Controller
{
    public function index() {
        if (isset($_SESSION['employee'])) {
            $this->redirect('home', 'home');
        } else {
            $view = new View("login");
            $data = ['ok'];

            $view->generateLogin($data);
        }
    }
}