<?php

namespace M2l\Kernel;

/**
 * Class Router
 */
class Router
{
    /**
     * Méthode permettant de récupérer les variables de la requête HTTP
     * et d'initialiser le controller correspondant aux paramètres
     */
    public function routeRequest() {
        try {
            $request = new Request(array_merge($_GET, $_POST));

            $controller = $this->createController($request);
            $action = $this->createAction($request);
            $parameters = [];
            foreach ($request->getAllParameters() as $key => $value) {
                if ($request->parametersExist($key)) {
                    $parameters[$key] = $request->getParameters($key);
                }
            }
            $controller->executeAction($action, $parameters);
        }
        catch (\Exception $e) {
            $this->generateError($e);
        }
    }

    /**
     * Initialise un controller en fonction des paramètres
     *
     * Par défault, le controller login est initialisé
     *
     * @param Request $request
     * @return string
     * @throws \Exception
     */
    private function createController(Request $request) {
        $controller = "Login";
        if ($request->parametersExist('controller')) {
            $controller = $request->getParameters('controller');
            $controller = ucfirst(strtolower($controller));
        }
        $classController = $controller."Controller" ;
        $fileController = ROOTDIR."MaisonDesLigues/Controller/" . $classController . ".php";
        if (file_exists($fileController)) {
            $class = '\\M2l\\Controller\\'.$classController;
            $controller = new $class;
            $controller->setRequest($request);
            return $controller;
        }
        else
            throw new \Exception("Fichier '$fileController' introuvable");
    }

    /**
     * Fait correspondre une action de controller à un paramêtre
     * de requête HTTP
     *
     * Par défaut, l'action index est associé.
     *
     * @param Request $request
     * @return string
     */
    private function createAction(Request $request) {
        $action = "index";
        if ($request->parametersExist('action')) {
            $action = $request->getParameters('action');
        }
        return $action;
    }

    /**
     * Génère une page erreur avec le message envoyé en paramètre
     *
     * @param \Exception $exception
     */
    private function generateError(\Exception $exception) {
        echo $exception;
    }
}