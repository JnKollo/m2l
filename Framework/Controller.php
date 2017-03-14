<?php

/**
 * Class Controller
 */
abstract class Controller
{
    private $action;

    protected $request;

    public function setRequest(Request $request) {
        $this->request = $request;
    }

    /**
     * Execute la méthode action correspondante aux paramètres reçus
     *
     * @param $action
     * @param null $parameters
     * @throws Exception
     */
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

    /**
     *
     * @param $controller
     * @param string $action
     * @param null $parameters
     */
    public function redirect($controller, $action = "index", $parameters = null)
    {
        $location = "index.php?controller=" . $controller . "&action=" . $action;

        if ($parameters) {
            $location = "index.php?controller=" . $controller . "&action=" . $action . "&id=". $parameters;
        }
        header("Location: " . $location);
        exit;
    }
}