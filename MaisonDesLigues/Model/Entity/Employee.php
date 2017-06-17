<?php

namespace M2l\Model\Entity;

class Employee extends BaseEntity
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $image;
    private $days_left;
    private $credits_left;
    private $manager_status;
    private $team_id;
    private $online;
    private $last_login;
    private $formations;
    private $pendingFormations;
    private $performedFormations;
    private $days_accumulated;
    private $credits_accumulated;

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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getDaysLeft()
    {
        return $this->days_left;
    }

    /**
     * @return mixed
     */
    public function getCreditsLeft()
    {
        return $this->credits_left;
    }

    /**
     * @return mixed
     */
    public function getManager_status()
    {
        return $this->manager_status;
    }

    /**
     * @return mixed
     */
    public function getTeam_id()
    {
        return $this->team_id;
    }

    /**
     * @return mixed
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * @return mixed
     */
    public function getLast_login()
    {
        return $this->last_login;
    }

    /**
     * @return mixed
     */
    public function getPendingFormations()
    {
        return $this->pendingFormations;
    }

    /**
     * @return mixed
     */
    public function getPerformedFormations()
    {
        return $this->performedFormations;
    }

    /**
     * @param $pendingFormations
     * @return $this
     */
    public function setPendingFormations($pendingFormations)
    {
        $this->pendingFormations = $pendingFormations;
        return $this;
    }

    /**
     * @param $performedFormations
     * @return $this
     */
    public function setPerformedFormations($performedFormations)
    {
        $this->performedFormations = $performedFormations;
        return $this;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        if (!is_int($id)) {
            $id = (int)$id;
        }
        $this->id = $id;
        return $this;
    }

    /**
     * @param $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param $plainPassword
     * @return $this
     */
    public function setPassword($plainPassword)
    {
        $hashPassword = password_hash($plainPassword, PASSWORD_BCRYPT);
        $this->password = $hashPassword;
        return $this;
    }

    /**
     * @param $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @param $days_left
     * @return $this
     */
    public function setDays_left($days_left)
    {
        if (!is_int($days_left)) {
            $days_left = (int)$days_left;
        }
        $this->days_left = $days_left;
        return $this;
    }

    /**
     * @param $credits_left
     * @return $this
     */
    public function setCredits_left($credits_left)
    {
        if (!is_int($credits_left)) {
            $credits_left = (int)$credits_left;
        }
        $this->credits_left = $credits_left;
        return $this;
    }

    /**
     * @param $manager_status
     * @return $this
     */
    public function setManager_status($manager_status)
    {
        if (!is_int($manager_status)) {
            $manager_status = (int)$manager_status;
        }
        $this->manager_status = $manager_status;
        return $this;
    }

    /**
     * @param $team_id
     * @return $this
     */
    public function setTeam_id($team_id)
    {
        if (!is_int($team_id)) {
            $team_id = (int)$team_id;
        }
        $this->team_id = $team_id;
        return $this;
    }

    /**
     * @param $online
     * @return $this
     */
    public function setOnline($online)
    {
        if (!is_int($online)) {
            $online = (int)$online;
        }
        $this->online = $online;
        return $this;
    }

    /**
     * @param $last_login
     * @return $this
     */
    public function setLast_login($last_login)
    {
        $this->last_login = $last_login;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFormations()
    {
        return $this->formations;
    }

    /**
     * @param $formations
     * @return $this
     */
    public function setFormations($formations)
    {
        if (is_array($formations)) {
            foreach ($formations as $formation) {
                $this->formations[] = $formation;
            }
        } else {
            $this->formations[] = $formations;
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDaysAccumulated()
    {
        return $this->days_accumulated;
    }

    /**
     * @return mixed
     */
    public function getCreditsAccumulated()
    {
        return $this->credits_accumulated;
    }

    /**
     * @param $attribute
     * @return bool
     */
    public function __isset($attribute)
    {
        return (bool)isset($this->$attribute);
    }

    /**
     * @param $attribute
     * @return mixed
     */
    public function __get($attribute)
    {
        return $this->$attribute;
    }
}
