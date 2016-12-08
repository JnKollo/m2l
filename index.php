<?php
session_start();
define("ROOTDIR", $_SERVER['DOCUMENT_ROOT']);

require 'Framework/Router.php';

$router = new Router();
$router->routeRequest();
