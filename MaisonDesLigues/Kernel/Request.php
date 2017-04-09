<?php

namespace M2l\Kernel;

/**
 * Class Request
 */
class Request
{
    private $parameters;

    public function __construct($parameters) {
        $this->parameters = $parameters;
    }

    public function parametersExist($name) {
        return (isset($this->parameters[$name]) && $this->parameters[$name] != "");
    }

    public function getAllParameters() {
        return $this->parameters;
    }

    public function getParameters($name) {
        if ($this->parametersExist($name)) {
            return $this->parameters[$name];
        }
        else
            throw new \Exception("Paramètre '$name' absent de la requête");
    }
}