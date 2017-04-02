<?php

namespace M2l\Model\Repository;

class FormationRepository extends BaseRepository
{
    private $entity;

    public function __construct()
    {
        $this->entity = 'Formation';
    }

    public function getObjectByEntity($entity = null)
    {
        return parent::getObjectByEntity($entity);
    }

    public function getAllFormationsOrderByDate()
    {
        $sql = "select *
                from formation
                order by date desc";
        $req = $this->executeRequest($sql);
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $this->hydrateEntityForEachResult($result, $this->entity);
    }

    public function CountFormations()
    {
        $sql = "select id
                from formation";
        $req = $this->executeRequest($sql);
        $result = $req->rowCount(\PDO::FETCH_ASSOC);
        return $result;
    }
} 
