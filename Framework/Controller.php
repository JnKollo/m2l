<?php

require_once 'Request.php';
require_once 'View.php';

abstract class Controller
{
    private $action;

    protected $request;

    public function setRequest(Request $request) {
        $this->request = $request;
    }

    public function executeAction($action) {
        if (method_exists($this, $action)) {
            $this->action = $action;
            $this->{$this->action}();
        }
        else {
            $classController = get_class($this);
            throw new Exception("Action '$action' non définie dans la classe $classController");
        }
    }

    public abstract function index();

    protected function generateVue($dataView = array()) {
        $classController = get_class($this);
        $controller = str_replace("Controller", "", $classController);
        $vue = new View($this->action, $controller);
        $vue->generate($dataView);
    }

    public function redirect($controller, $method = "index")
    {
        $location = "/index.php?controller=" . $controller . "&action=" . $method;
        header("Location: " . $location);
        exit;
    }
}