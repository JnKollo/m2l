<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'HomeController.php';
require_once 'LoginController.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/SecurityRepository.php';


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
                    $employee = $employeeRepository->getIdByLoginAndPassword($login, $hash);
                    $employeeRepository->login($employee['id']);
                    $_SESSION['employee'] = $employee['id'];
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
            $employeeRepository->logout($_SESSION['employee']);
            session_unset();
            session_destroy();
        }
        $this->redirect('login', 'index');
    }
}