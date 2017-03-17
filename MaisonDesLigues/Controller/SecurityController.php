<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;
use M2l\Kernel\Request;
use M2l\Model\SecurityRepository;

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
                    $employee = $securityRepository->getIdByLoginAndPassword($login, $hash);
                    $securityRepository->login($employee['id']);
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
            $securityRepository = new SecurityRepository();
            $securityRepository->logout($_SESSION['employee']);
            session_unset();
            session_destroy();
        }
        $this->redirect('login', 'index');
    }
}