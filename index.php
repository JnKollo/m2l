<?php
session_start();

define("ROOTDIR", $_SERVER['DOCUMENT_ROOT']);

require 'Framework/Autoloader.php';
require 'vendor/autoload.php';

Autoloader::register();

/*
 * Initialise une session de 10 minutes
 * Si la session est expiré alors on redirige vers la page login
 */
$inactive = 6000;
if (isset($_SESSION["timeout"])) {
    $sessionTTL = time() - $_SESSION["timeout"];
    if ($sessionTTL > $inactive) {
        session_unset();
        session_destroy();
        header("Location: index.php?controller=security&action=logout");
    }
}

$_SESSION["timeout"] = time();

/*
 * Initialise un objet Router
 * Le router se charge de router la requête HTTP
 * au controller correspondant
 */
$router = new Router();
$router->routeRequest();
