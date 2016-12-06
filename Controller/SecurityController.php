<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Model/EmployeeRepository.php';


class SecurityController extends Controller
{
    public function index() {
        $login = $this->request->getParameters("connexion-id");
        $password = $this->request->getParameters("connexion-password");
        $hash = crypt($password, 'rl');

        $employeeRepository = new EmployeeRepository();
        $employee = $employeeRepository->loginChecker($login, $hash);

        if (!empty($employee)) {
            $view = new View("homepage");
            var_dump($employee);
            $view->generate($employee);
        } else {
            $view = new View("error");
            $view->generate(array('msgErreur' => "pas de message"));
        }
    }

}