<?php

require_once 'Request.php';
require_once 'View.php';

class Router
{
    public function routeRequest() {
        try {
            $request = new Request(array_merge($_GET, $_POST));

            $controller = $this->createController($request);
            $action = $this->createAction($request);

            $controller->executeAction($action);
        }
        catch (Exception $e) {
            $this->generateError($e);
        }
    }

    private function createController(Request $request) {
        $controller = "Accueil";
        if ($request->parametersExist('controller')) {
            $controller = $request->getParameters('controller');
            $controller = ucfirst(strtolower($controller));
        }
        $classController = "Controller" . $controller;
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

    private function createAction(Request $request) {
        $action = "index";
        if ($request->parametersExist('action')) {
            $action = $request->getParameters('action');
        }
        return $action;
    }

    private function generateError(Exception $exception) {
        $vue = new View('error');
        $vue->generate(array('msgErreur' => $exception->getMessage()));
    }
}