<?php
session_start();

define("ROOTDIR", $_SERVER['DOCUMENT_ROOT']);

require 'Framework/Autoloader.php';

Autoloader::register();

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

$router = new Router();
$router->routeRequest();
