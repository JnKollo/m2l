<?php

require_once 'Framework/Model.php';

class FormationRepository extends Model
{
    private $id;
    private $name;
    private $description;
    private $days;
    private $date;
    private $credits;
    private $duration;
    private $place;
    private $requirement;
    private $provider;
    private $status;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @return mixed
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @return mixed
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function getStatus()
    {
        return $this->status;
    }


    public function getAllFormationsOrderByDate()
    {
        $sql = "select *
                from formation
                order by date desc";
        $req = $this->executeRequest($sql);
        $req->setFetchMode(PDO::FETCH_CLASS, 'FormationRepository');
        $result = $req->fetchAll();
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
        $req->setFetchMode(PDO::FETCH_CLASS, 'FormationRepository');
        $result = $req->fetchAll();
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
        $result = $req->fetchAll();
        return $result;
    }

    public function getOneFormationById($id)
    {
        $sql = "select *
                from formation
                where id = ?";
        $req = $this->executeRequest($sql, array($id));
        $req->setFetchMode(PDO::FETCH_CLASS, 'FormationRepository');
        $result = $req->fetch();
        return $result;
    }

    public function getSearchFormations($parameters)
    {
        $sql = "select * from formations if ";
    }
} 
