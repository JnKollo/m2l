<?php

require_once 'Framework/Controller.php';
require_once 'Framework/Model.php';

class HomeController extends Controller
{
    public function index() {
    	$employee = serialize($_SESSION['employee']);
        $view = new View("home");
        $data = ['ok'];
        $view->generate(array('employee' => unserialize($employee)));
    }
}