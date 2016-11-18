<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';


class LoginController extends Controller
{
    private $title;
    private $content;

    public function index() {
        $view = new View("login");
        $data = ['ok'];

        $view->generate($data);
    }
}