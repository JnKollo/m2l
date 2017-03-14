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
     * @param $filename
     * @return string
     */
    public function filenameToTwig($filename) {
        $file = '';
        if (null != $filename) {
            $file = $filename.'.html.twig';
        }
        return $file;
    }

    /**
     * @param $filename
     * @param $data
     */
    public function generate($filename, $data) {
        $loader = new Twig_Loader_Filesystem(ROOTDIR.'/Views');
        $twig = new Twig_Environment($loader, array(
            'debug' => true
        ));
        $twig->addGlobal('rootdir', ROOTDIR);
        $template = $twig->load($this->filenameToTwig($filename));
        echo $template->render(array('data' => $data));
    }
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