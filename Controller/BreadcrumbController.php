<?php

require_once 'Framework/Model.php';
require_once 'Framework/Request.php';

class BreadcrumbController
{

    private static $breadcrumb;

    public static function homeBreadcrumb()
    {
        self::$breadcrumb[0] = array(
                'controller' => 'Home',
                'action' => 'home',
                'name' => 'Accueil');
        return self::$breadcrumb;
    }

    public static function formationBreadcrumb()
    {
        self::$breadcrumb = self::homeBreadcrumb();
        self::$breadcrumb[1] = array(
                'controller' => 'Formation',
                'action' => 'home',
                'name' => 'Les Formations');
        return self::$breadcrumb;
    }

    public function TeamBreadcrumb()
    {
        self::$breadcrumb = self::homeBreadcrumb();
        self::$breadcrumb[1] = array(
                'controller' => 'Team',
                'action' => 'home',
                'name' => 'Mon équipe');
        return self::$breadcrumb;
    }
}
