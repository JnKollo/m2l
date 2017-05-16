<?php

namespace M2l\Kernel;

/**
 * Class Model
 */
abstract class Model
{
    private static $bdd;

    /**
     * Execute la requete correspondante aux paramètres reçus
     *
     * @param $sql
     * @param null $parameters
     * @return \PDOStatement
     */
    protected function executeRequest($sql, $parameters = null)
    {
        if ($parameters === null) {
            $result = self::getBdd()->query($sql);
        } else {
            $result = self::getBdd()->prepare($sql);
            $result->execute($parameters);
        }
        return $result;
    }

    /**
     * Recupère les identifiants de connexion à la base
     * et initialise un objet PDO
     *
     * @return \PDO
     */
    private static function getBdd()
    {
        if (self::$bdd === null) {
            $dsn = Configuration::get("dsn");
            $login = Configuration::get("login");
            $mdp = Configuration::get("mdp");
            self::$bdd = new \PDO($dsn, $login, $mdp,
                array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
        }
        return self::$bdd;
    }
}
