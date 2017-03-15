<?php

namespace M2l\Model\Entity;

abstract class BaseEntity
{
    protected $id;

    public function __construct()
    {
    }

    protected function hydrate(array $data = null)
    {
        if (null != $data) {
            foreach ($data as $key => $value) {
                $method = 'set' . ucfirst($key);
                if (method_exists($this, $method)) {
                    $this->$method($value);
                }
            }
        }
    }
}