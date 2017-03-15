<?php

namespace M2l\Model;

use M2l\Model\Repository\BaseRepository;

class FormationRepository extends BaseRepository
{
    public function getAllFormationsOrderByDate()
    {
        $sql = "select *
                from formation
                order by date desc";
        $req = $this->executeRequest($sql);
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllFormationsOrderByDateAndPaginate($limit, $offset)
    {
        $sql = "select *
                from formation
                order by date desc
                limit $limit
                offset $offset";
        $req = $this->executeRequest($sql);
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAjaxFormationsOrderByDateAndPaginate($limit, $offset)
    {

        $sql = "select *
                from formation
                order by date desc
                limit $limit
                offset $offset";
        $req = $this->executeRequest($sql);
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function CountFormations()
    {
        $sql = "select id
                from formation";
        $req = $this->executeRequest($sql);
        $result = $req->rowCount(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function getOneFormationById($id)
    {
        $sql = "select *
                from formation
                where formation.id = ?";
        $req = $this->executeRequest($sql, array($id));
        $result = $req->fetch();
        return $result;
    }

    public function getFormationsBySearchQuery($parameters)
    {
        $label = '';
        $dayRange = '';
        $creditRange = '';
        $dateRange = '';
        if(isset($parameters['label'])) {
            $label = " and name like '%".$parameters['label']."%'";
        }
        if(isset($parameters['dayMin']) && isset($parameters['dayMax'])) {
            $dayRange = " and days between ".$parameters['dayMin']." and ".$parameters['dayMax'];
        }
        if(isset($parameters['creditMin']) && isset($parameters['creditMax'])) {
            $creditRange = " and credits between ".$parameters['creditMin']." and ".$parameters['creditMax'];
        }
        if(isset($parameters['dateMin']) && isset($parameters['dateMax'])) {
            $dateRange = " and date between '".$parameters['dateMin']."' and '".$parameters['dateMax']."'";
        }
        $orderByDate = ' order by date desc';
        $sql = "select *
                from formation
                where 1";
        $sql = $sql.$label.$dayRange.$creditRange.$dateRange.$orderByDate;

        $req = $this->executeRequest($sql);
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
} 
