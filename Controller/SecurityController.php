<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'HomeController.php';
require_once 'LoginController.php';

class SecurityController extends Controller
{
    public function index()
    {
    }

    public function loginCheck()
    {
        if (isset($_SESSION['employee'])) {
            $this->redirect('home', 'home');
        }else {
            $login = $this->request->getParameters("login");
            $password = $this->request->getParameters("password");
            $submit = $this->request->getParameters("submit");

            if (isset($submit, $login, $password)) {
                $hash = crypt($password, 'rl');

                $securityRepository = new SecurityRepository();
                $hasAccount = $securityRepository->loginChecker($login, $hash);

                if ($hasAccount) {
                    $employeeRepository = new EmployeeRepository();
                    $idEmployee = $employeeRepository->getIdByLoginAndPassword($login, $hash);
                    $_SESSION['employee'] = $idEmployee;
                    $this->redirect('home', 'home');
                } else {
                    $this->redirect('login', 'index');
                }
            }
        }
    }

    public function logout()
    {
        if (isset($_SESSION['employee'])) {
            $employeeRepository = new EmployeeRepository();
            $employeeRepository->logout($_SESSION['employee']['id']);
            session_unset();
            session_destroy();
        }
        $this->redirect('login', 'index');
    }
}