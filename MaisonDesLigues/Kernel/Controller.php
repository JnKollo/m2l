<?php

namespace M2l\Kernel;

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
     * @throws \Exception
     */
    public function executeAction($action, $parameters = null) {
        if (method_exists($this, $action)) {
            $this->action = $action;
            $this->{$this->action}($parameters);
        }
        else {
            $classController = get_class($this);
            throw new \Exception("Action '$action' non définie dans la classe $classController");
        }
    }

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
     * @param array $content
     */
    public function generate($filename, array $content = []) {
        $loader = new \Twig_Loader_Filesystem(ROOTDIR.'MaisonDesLigues/Views');
        $twig = new \Twig_Environment($loader, array(
            'debug' => true
        ));
        $twig->addExtension(new \Twig_Extension_Debug());
        $twig->addGlobal('rootdir', ROOTDIR);
        $template = $twig->load($this->filenameToTwig($filename));
        echo $template->render($content);
    }

    /**
     * @param array $parameters
     */
    public function jsonRender(array $parameters) {
        header('Content-Type: application/json');
        echo json_encode($parameters);
    }

    /**
     *
     * @param $controller
     * @param string $action
     * @param null $parameters
     */
    public function redirect($controller, $action = "index", array $parameters = [])
    {
        $location = "index.php?controller=" . $controller . "&action=" . $action;

        if ($parameters) {
            foreach ($parameters as $key => $value) {
                $location .= "&$key=". $value;
            }
        }

        header("Location: " . $location);
        exit;
    }
}