<?php
session_start();
define("ROOTDIR", $_SERVER['DOCUMENT_ROOT']);

require 'Framework/Router.php';
require 'Framework/Autoloader.php';

Autoloader::register(); 

$router = new Router();
$router->routeRequest();
