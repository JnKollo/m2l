<?php

require_once 'Framework/Model.php';

class FormationRepository extends Model
{
    private $id;
    private $name;
    private $description;
    private $date;
    private $duration;
    private $place;
    private $requirement;
    private $provider;

    public function getAllFormationsOrderByDate()
    {
        $sql = "select *
                from formation
                order by date desc";
        $req = $this->executeRequest($sql);
        $req->setFetchMode(PDO::FETCH_CLASS, 'FormationRepository');
        $result = $req->fetch();
        return $result;
    }
} 
