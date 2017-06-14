<?php

namespace M2l\Kernel;

/**
 * Class Request
 */
class Request
{
    private $parameters;

    /**
     * Request constructor.
     *
     * @param $parameters
     */
    public function __construct($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public function parametersExist($name)
    {
        return (isset($this->parameters[$name]) && $this->parameters[$name] != "");
    }

    /**
     * @return mixed
     */
    public function getAllParameters()
    {
        return $this->parameters;
    }

    /**
     * @param $name
     *
     * @return mixed
     * @throws \Exception
     */
    public function getParameters($name)
    {
        if ($this->parametersExist($name)) {
            return $this->parameters[$name];
        } else {
            throw new \Exception("Paramètre '$name' absent de la requête");
        }
    }
}
