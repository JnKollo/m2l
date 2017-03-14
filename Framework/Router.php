<?php

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
            if ($request->parametersExist('id')) {
                $parameters['id'] = $request->getParameters('id');
            }
            if ($request->parametersExist('page')) {
                $parameters['page'] = $request->getParameters('page');
            }
            if ($request->parametersExist('tableau')) {
                $parameters['tableau'] = $request->getParameters('tableau');
            }
            if ($request->parametersExist('formation')) {
                $parameters['formation'] = $request->getParameters('formation');
            }
            if ($request->parametersExist('dayMin')) {
                $parameters['dayMin'] = $request->getParameters('dayMin');
            }
            if ($request->parametersExist('dayMax')) {
                $parameters['dayMax'] = $request->getParameters('dayMax');
            }
            if ($request->parametersExist('dateMin')) {
                $parameters['dateMin'] = $request->getParameters('dateMin');
            }
            if ($request->parametersExist('dateMax')) {
                $parameters['dateMax'] = $request->getParameters('dateMax');
            }
            if ($request->parametersExist('creditMin')) {
                $parameters['creditMin'] = $request->getParameters('creditMin');
            }
            if ($request->parametersExist('creditMax')) {
                $parameters['creditMax'] = $request->getParameters('creditMax');
            }
            if ($request->parametersExist('label')) {
                $parameters['label'] = $request->getParameters('label');
            }
            $controller->executeAction($action, $parameters);
        }
        catch (Exception $e) {
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
     * @throws Exception
     */
    private function createController(Request $request) {
        $controller = "Login";
        if ($request->parametersExist('controller')) {
            $controller = $request->getParameters('controller');
            $controller = ucfirst(strtolower($controller));
        }
        $classController = $controller."Controller" ;
        $fileController = "Controller/" . $classController . ".php";
        if (file_exists($fileController)) {
            require($fileController);
            $controller = new $classController();
            $controller->setRequest($request);
            return $controller;
        }
        else
            throw new Exception("Fichier '$fileController' introuvable");
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
     * @param Exception $exception
     */
    private function generateError(Exception $exception) {
        echo $exception;
    }
}