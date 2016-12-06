<?php

require_once 'Configuration.php';

abstract class Model
{
    private static $bdd;

    protected function executeRequest($sql, $parameters = null) {
        if ($parameters === null) {
            $result = self::getBdd()->query($sql);
        }
        else {
            $result = self::getBdd()->prepare($sql);
            $result->execute($parameters);
        }
        return $result;
    }

    private static function getBdd() {
        if (self::$bdd === null) {
            $dsn = Configuration::get("dsn");
            $login = Configuration::get("login");
            $mdp = Configuration::get("mdp");
            self::$bdd = new PDO($dsn, $login, $mdp,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return self::$bdd;
    }

}