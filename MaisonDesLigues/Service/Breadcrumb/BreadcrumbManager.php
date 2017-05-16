<?php

namespace M2l\Service\Breadcrumb;

class BreadcrumbManager
{
    private static $breadcrumb;

    public static function homeBreadcrumb()
    {
        self::$breadcrumb[0] = array(
            'name' => 'Accueil',
            'redirect' => 'index.php?controller=Home&action=home'
        );
        return self::$breadcrumb;
    }

    public static function formationBreadcrumb()
    {

        self::$breadcrumb = self::homeBreadcrumb();
        self::$breadcrumb[1] = array(
            'name' => 'Formations',
            'redirect' => 'index.php?controller=formation&action=home'
        );
        return self::$breadcrumb;
    }

    public static function teamBreadcrumb()
    {
        self::$breadcrumb = self::homeBreadcrumb();
        self::$breadcrumb[1] = array(
            'name' => 'Mon équipe',
            'redirect' => 'index.php?controller=Team&action=show'
        );
        return self::$breadcrumb;
    }

    public static function manageTeamBreadcrumb()
    {
        self::$breadcrumb = self::teamBreadcrumb();
        self::$breadcrumb[2] = array(
            'name' => 'Gérer',
            'redirect' => '#'
        );
        return self::$breadcrumb;
    }

    public static function editFormationBreadcrumb()
    {
        self::$breadcrumb = self::formationBreadcrumb();
        self::$breadcrumb[2] = array(
            'name' => 'Gérer',
            'redirect' => '#'
        );
        return self::$breadcrumb;
    }

    public static function searchFormationBreadcrumb()
    {
        self::$breadcrumb = self::formationBreadcrumb();
        self::$breadcrumb[2] = array(
            'name' => 'Recherche',
            'redirect' => 'index.php?controller=formation&action=search'
        );
        return self::$breadcrumb;
    }
}
