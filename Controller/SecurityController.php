<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/SecurityRepository.php';
require_once 'HomeController.php';
require_once 'LoginController.php';


class SecurityController extends Controller
{
    public function index()
    {
    }

    public function loginCheck()
    {
        if ($_SESSION['employee']) {
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
                    $employee = $employeeRepository->getEmployeeByLoginAndPassword($login, $hash);
                    $employee->login($employee->getId());
                    $employee->getFormationsByEmployee($employee->getId());
                    $_SESSION['employee'] = serialize($employee);
                    $this->redirect('home', 'home');
                } else {
                    $this->redirect('login', 'index');
                }
            }
        }
    }

    public function logout()
    {
        if ($_SESSION['employee']) {
            $employee = unserialize($_SESSION['employee']);
            $employee->logout($employee->getId());
            session_unset();
            session_destroy();
        }
        $this->redirect('login', 'index');
    }
}