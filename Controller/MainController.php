<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';
require_once 'Model/EmployeeRepository.php';
require_once 'Model/FormationRepository.php';
require_once 'Model/SecurityRepository.php';


class MainController extends Controller
{
    public function index() 
    {
        if ($_SESSION) {
            $employee = unserialize($_SESSION['employee']);
            $view = new View("home");
            $view->generate(array('employee' => $employee));
        } else {
            $login = $this->request->getParameters("login");
            $password = $this->request->getParameters("password");
            $hash = crypt($password, 'rl');

            $securityRepository = new SecurityRepository();
            $isLogged = $securityRepository->loginChecker($login, $hash);

            if ($isLogged) {
                $employeeRepository = new EmployeeRepository();
                $formationRepository = new FormationRepository();

                $formations = $formationRepository->getAllFormationsOrderByDate();
                $employee = $employeeRepository->getEmployeeByLoginAndPassword($login, $hash);
                $employee->login($employee->getId());
                $_SESSION['employee'] = serialize($employee);
                $view = new View("home");
                $view->generate(array('employee' => $employee, 'formations' => $formations));
            } else {
                $view = new View("error");
                $view->generate(array('msgErreur' => "pas de message"));
            }
        }
    }

    public function logout() 
    {
        if ($_SESSION) {
            $employee = unserialize($_SESSION['employee']);
            $employee->logout($employee->getId());
            session_destroy();

            $view = new View("login");

            $view->generateLogin(array('message' => 'Vous êtes déconnecté'));
        } else {
            $view = new View("error");
            $view->generateLogin(array('msgErreur' => "page non trouvée"));
        }
        
    }
}