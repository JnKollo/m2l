<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;
use M2l\Model\Repository\SecurityRepository;

class SecurityController extends Controller
{
    public function index()
    {
    }

    public function loginCheck() {
        if (isset($_SESSION['employee'])) {
            $this->redirect('home', 'home');
        }else {
            $email = $this->request->getParameters("email");
            $password = $this->request->getParameters("password");
            $submit = $this->request->getParameters("submit");

            if (isset($submit, $email, $password)) {
                $securityRepository = new SecurityRepository();

                if($securityRepository->emailChecker($email)) {
                    $hash = crypt($password, 'rl');

                    if ($securityRepository->loginChecker($email, $hash)) {
                        $employee = $securityRepository->getIdByEmailAndPassword($email, $hash);
                        $securityRepository->login($employee['id']);
                        $_SESSION['employee'] = $employee['id'];

                        $this->jsonRender(array(
                            'redirect' => 'index.php?controller=security&action=loginCheck'
                        ));
                    } else {
                        $this->jsonRender(array(
                            'wrong password' => 'Mot de passe incorrect'
                        ));
                    }
                } else {
                    $this->jsonRender(array(
                        'wrong email' => 'Veuillez entrer un email valide'
                    ));
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