<?php

namespace M2l\Kernel;

/**
 * Class Configuration
 */
class Configuration
{
    private static $parameters;

    /**
     *
     * @param $name
     * @param null $defaultValue
     * @return null
     */
    public static function get($name, $defaultValue = null)
    {
        if (isset(self::getParameters()[$name])) {
            $value = self::getParameters()[$name];
        } else {
            $value = $defaultValue;
        }
        return $value;
    }

    /**
     * @return array
     * @throws \Exception
     */
    private static function getParameters()
    {
        if (self::$parameters == null) {
            $FilePath = "Config/dev.ini";
            if (!file_exists($FilePath)) {
                throw new \Exception("Aucun fichier de configuration trouvé");
            } else {
                self::$parameters = parse_ini_file($FilePath);
            }
        }
        return self::$parameters;
    }
}
