<?php

namespace M2l\Controller;

use M2l\Kernel\Controller;

class LoginController extends Controller
{
    public function index()
    {
        if (isset($_SESSION['employee'])) {
            $this->redirect('Home', 'home');
        } else {
            $this->generate('Login/login', array('ok'));
        }
    }
}
