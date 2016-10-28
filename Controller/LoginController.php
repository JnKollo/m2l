<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';


class Login extends Controller
{
    private $title;
    private $content;

    public function index() {
        $view = new View("Login");
        $view->generate(array('title' => $title, 'content' => $content));
    }
}