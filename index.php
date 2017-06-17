<?php
session_start();

define("ROOTDIR", $_SERVER['DOCUMENT_ROOT'].'/');

require_once __DIR__.'/vendor/autoload.php';

use M2l\Kernel\Router;

/*
 * Initialise une session de 10 minutes
 * Si la session est expirée alors on redirige vers la page login
 */
$inactive = 6000;

if (isset($_SESSION["timeout"])) {
    $sessionTTL = time() - $_SESSION["timeout"];
    if ($sessionTTL > $inactive) {
        session_unset();
        session_destroy();
        header("Location: index.php?controller=security&action=logout");
    }
} else $_SESSION["timeout"] = time();

/*
 * Initialise un objet Router
 * Le router se charge de router la requête HTTP
 * au controller correspondant
 */
$router = new Router();
$router->routeRequest();
