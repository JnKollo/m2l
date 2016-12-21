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

    public function executeAction($action, $parameters = null) {
        if (method_exists($this, $action)) {
            $this->action = $action;
            $this->{$this->action}($parameters);
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

    public function redirect($controller, $action = "index", $parameters = null)
    {
        $location = "/index.php?controller=" . $controller . "&action=" . $action;
        if ($parameters['id']) {
            $location = "/index.php?controller=" . $controller . "&action=" . $action . "&id=". $parameters['id'];
        } elseif($parameters['tableau']) {
            if($parameters['page']) {
                $location = "/index.php?controller=" . $controller . "&action=" . $action . "&tableau=" . $parameters['tableau'] . "&page=" . $parameters['page'];
            } else {
                $location = "/index.php?controller=" . $controller . "&action=" . $action . "&tableau=" . $parameters['tableau'];
            }
        }
        header("Location: " . $location);
        exit;
    }
}