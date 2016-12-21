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
    private $id_team;
    private $is_active;
    private $last_login;
    private $formations;
    private $pendingFormations;


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
        return $this->id_team;
    }

    public function getPendingFormations()
    {
        return $this->pendingFormations;
    }

    public function setPendingFormations($pendingFormations)
    {
        $this->pendingFormations = $pendingFormations;
        return $this;
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
        $this->is_manager = 1;
        return $this;
    }

    public function removeManager()
    {
        $this->is_manager = 0;
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

    public function getFormations()
    {
        return $this->formations;
    }

    public function setFormations($formations)
    {
        $this->formations[] = $formations;
        return $this;
    }

    public function getEmployeeById($id)
    {
        $sql = "select *
                from employee
                where id = ?";
        $req = $this->executeRequest($sql, array($id));
        $req->setFetchMode(PDO::FETCH_CLASS, 'EmployeeRepository');
        $result = $req->fetch();
        $result->getFormationsByEmployee($id);
        return $result;
    }

    public function getIdByLoginAndPassword($login, $password)
    {
        $sql = "select id
                from employee
                where username = ? and password = ?";
        $req = $this->executeRequest($sql, array($login, $password));
        $result = $req->fetch();
        return $result;
    }

    public function login($id)
    {
        $this->setActivity();
        $sql = "UPDATE employee SET is_active=1, last_login=NOW() WHERE id=?";
        $req = $this->executeRequest($sql, array($id));
    }

    public function logout($id)
    {
        $this->removeActivity();
        $sql = "UPDATE employee SET is_active=0 WHERE id=?";
        $req = $this->executeRequest($sql, array($id));
    }

    public function getFormationsByEmployee($id)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                order by date desc
                limit 6";
        $req = $this->executeRequest($sql, array($id));
        $req->setFetchMode(PDO::FETCH_CLASS, 'FormationRepository');
        $result = $req->fetchAll();
        foreach ($result as $formation) {
            $this->setFormations($formation);
        }
    }

    public function hasFormation($idEmployee, $idFormation)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_employee = ?
        and employee_formation.id_formation = ?";
        $req = $this->executeRequest($sql, array($idEmployee, $idFormation));
        return $req->fetchColumn();
    }

    public function addFormation($idEmployee, $idFormation)
    {
        $sql = "insert into employee_formation (id_formation, id_employee, id_formation_status)
                values (?, ?, 2)";
        $this->executeRequest($sql, array($idFormation, $idEmployee));
        $this->getFormationsByEmployee($idEmployee);
    }

    public function getEmployeeByTeam($id_team, $id_employee)
    {
        $sql = "select id, username, credits_left, days_left
                from employee
                where id_team = ?
                and id <> ?";
        $req = $this->executeRequest($sql, array($id_team, $id_employee));
        $req->setFetchMode(PDO::FETCH_CLASS, 'EmployeeRepository');
        return $req->fetchAll();
    }

    public function getOneEmployeeByTeam($id_employee)
    {
        $sql = "select id, username, credits_left, days_left
                from employee
                where id = ?";
        $req = $this->executeRequest($sql, array($id_employee));
        $req->setFetchMode(PDO::FETCH_CLASS, 'EmployeeRepository');
        $result = $req->fetch();
        $result->getFormationsByEmployee($id_employee);
        return $result;
    }

    public function removeFormation($idEmployee, $idFormation)
    {
        $sql = "delete from employee_formation
                where id_employee = ?
                and id_formation = ?";
        $this->executeRequest($sql, array($idEmployee, $idFormation));
        $this->getFormationsByEmployee($idEmployee);
    }

    public function getValidateFormationByEmployee($idEmployee)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_employee = ?
        and employee_formation.id_formation_status = 1";
        $req = $this->executeRequest($sql, array($idEmployee));
        return $req->fetchColumn();
    }

    public function getPendingFormationByEmployee($idEmployee)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_employee = ?
        and employee_formation.id_formation_status = 2";
        $req = $this->executeRequest($sql, array($idEmployee));
        return $req->fetchColumn();
    }

} 
