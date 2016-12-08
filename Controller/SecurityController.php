<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/SecurityRepository.php';


class SecurityController extends Controller
{
    public function index() 
    {
        $login = $this->request->getParameters("connexion-id");
        $password = $this->request->getParameters("connexion-password");
        $hash = crypt($password, 'rl');

        $securityRepository = new SecurityRepository();
        $isLogged = $securityRepository->loginChecker($login, $hash);

        if ($isLogged) {
            $employeeRepository = new EmployeeRepository();
            $employee = $employeeRepository->getEmployeeByLoginAndPassword($login, $hash);

            $employee->login($employee->getId());
            $_SESSION['employee'] = serialize($employee);
            $view = new View("homepage");
            $view->generate(array('employee' => $employee));
        } else {
            $view = new View("error");
            $view->generate(array('msgErreur' => "pas de message"));
        }
    }

    public function logout() 
    {
        $employee = unserialize($_SESSION['employee']);
        $employee->logout($employee->getId());
        session_destroy();

        $view = new View("login");

        $view->generate(array('message' => 'Vous êtes déconnecté'));
    }
}