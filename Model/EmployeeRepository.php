<?php

require_once 'Framework/Model.php';

class EmployeeRepository extends Model
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $days_left;
    private $credits_left;
    private $is_manager;
    private $team;
    private $is_active;
    private $last_login;

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getDaysLeft()
    {
        return $this->days_left;
    }

    public function getCreditsLeft()
    {
        return $this->credits_left;
    }

    public function isManager()
    {
        return $this->is_manager;
    }

    public function getTeam()
    {
        return $this->team;
    }

    public function isActive()
    {
        return $this->is_active;
    }

    public function getLastLogin()
    {
        return $this->last_login;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function setPassword($plainPassword)
    {
        $hashPassword = password_hash($plainPassword,PASSWORD_BCRYPT);
        $this->password = $hashPassword;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setDaysLeft($days_left)
    {
        $this->days_left = $days_left;
        return $this;
    }

    public function setCreditsLeft($credits_left)
    {
        $this->credits_left = $credits_left;
        return $this;
    }

    public function setManager()
    {
        $this->is_manager = true;
        return $this;
    }

    public function removeManager()
    {
        $this->is_manager = false;
        return $this;
    }

    public function setTeam($team)
    {
        $this->team = $team;
        return $this;
    }

    public function setActivity()
    {
        $this->is_active = 1;
        return $this;
    }

    public function removeActivity()
    {
        $this->is_active = 0;
        return $this;
    }

    public function getEmployeeByLoginAndPassword($login, $password)
    {
        $sql = "select *
                from employee
                where username = ? and password = ?";
        $req = $this->executeRequest($sql, array($login, $password));
        $req->setFetchMode(PDO::FETCH_CLASS, 'EmployeeRepository');
        $result = $req->fetch();
        return $result;
    }
} 
