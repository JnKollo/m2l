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

    public function getFormationsBySearchQuery($parameters)
    {
        $name = '';
        $dayRange = '';
        if(isset($parameters['name']) && $parameters['name'] != '') {
            $name = " and name like '%".$parameters['name']."%'";
        }
        if(isset($parameters['days']) && $parameters['days'] != '') {
            $dayRange = " and days = ".$parameters['days'];
        }
        $orderByDate = ' order by date desc';
        $sql = "select *
                from formation
                where 1";
        $sql = $sql.$name.$dayRange.$orderByDate;
        $req = $this->executeRequest($sql);
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $this->hydrateEntityForEachResult($result, $this->entity);
    }
}
