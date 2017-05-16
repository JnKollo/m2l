<?php

namespace M2l\Model\Repository;

use M2l\Kernel\Model;

class BaseRepository extends Model
{
    public function getObjectByEntity($entity = null)
    {
        switch (ucfirst($entity)) {
            case 'Employee':
                return new \M2l\Model\Entity\Employee();
                break;
            case 'Formation':
                return new \M2l\Model\Entity\Formation();
                break;
        }
        return 0;
    }

    public function hydrateOneEntity($result, $name)
    {
        $entity = array('');
        if ($result) {
            $entity = $this->getObjectByEntity($name);
            $entity->hydrate($result);
        }
        return $entity;
    }

    public function hydrateEntityForEachResult(array $result, $name)
    {
        $entities = [];
        foreach ($result as $formation) {
            $entity = $this->getObjectByEntity($name);
            $entity->hydrate($formation);
            $entities[] = $entity;
        }
        return $entities;
    }

    private function getTableFromCallingClass()
    {
        $table = explode('\\', substr(strtolower(get_class($this)), 0, strlen('repository')*-1));
        return end($table);
    }

    public function getOneBy(array $field)
    {
        $table = $this->getTableFromCallingClass();
        $entity = $this->getObjectByEntity($table);
        $key = key($field);
        $value = $field[$key];
        $sql = "select *
                from $table
                where ? = ?";
        $req = $this->executeRequest($sql, array($key, $value));
        $req->setFetchMode(\PDO::FETCH_ASSOC);
        $entity->hydrate($req->fetch());
        return $entity;
    }

    public function getOneById($id)
    {
        $id = (int)$id;
        $table = $this->getTableFromCallingClass();
        $entity = $this->getObjectByEntity($table);
        $sql = "select *
                from $table
                where id = ?";
        $req = $this->executeRequest($sql, array($id));
        $req->setFetchMode(\PDO::FETCH_ASSOC);
        $entity->hydrate($req->fetch());
        return $entity;
    }

    public function getAll()
    {
        $table = $this->getTableFromCallingClass();
        $sql = "select *
                from $table";
        $req = $this->executeRequest($sql);
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $this->hydrateForEachResult($result, ucfirst($table));
    }
}
