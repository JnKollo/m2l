<?php

require_once 'Framework/Model.php';

class EmployeeRepository extends Model
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $image;
    private $days_left;
    private $credits_left;
    private $is_manager;
    private $id_team;
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

    public function getImage()
    {
        return $this->image;
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

    public function getFormations()
    {
        return $this->formations;
    }

    public function setFormations($formations)
    {
        $this->formations[] = $formations;
        return $this;
    }

    public function login($id)
    {
        $sql = "UPDATE employee SET is_active = 1, last_login = NOW() WHERE id = ?";
        $this->executeRequest($sql, array($id));
    }

    public function logout($id)
    {
        $sql = "UPDATE employee SET is_active=0 WHERE id=?";
        $this->executeRequest($sql, array($id));
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
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getFormationsByEmployee($id)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                order by date desc";
        $req = $this->executeRequest($sql, array($id));
        $req->setFetchMode(PDO::FETCH_CLASS, 'FormationRepository');
        $result = $req->fetchAll();
        foreach ($result as $formation) {
            $formation->setStatus($formation->getId(), $id);
            $this->setFormations($formation);
        }
    }

    public function getAjaxFormationsByEmployee($idEmployee)
    {
        $sql = "select formation.*, formation_status.state_of_validation
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                    inner join formation_status
                    on formation_status.id = employee_formation.id_formation_status
                where employee_formation.id_employee = ?
                order by date desc";
        $req = $this->executeRequest($sql, array($idEmployee));
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getFormationsByEmployeeOrderByDateAndPaginate($idEmployee, $limit, $offset, $startYear, $endYear)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                and formation.date >= ?
                and formation.date < ?
                order by date desc
                limit $limit
                offset $offset";
        $req = $this->executeRequest($sql, array($idEmployee, $startYear, $endYear));
        $req->setFetchMode(PDO::FETCH_CLASS, 'FormationRepository');
        $result = $req->fetchAll();
        foreach ($result as $formation) {
            $formation->setStatus($formation->getId(), $idEmployee);
        }
        return $result;
    }

    public function getAjaxFormationsByEmployeeOrderByDateAndPaginate($idEmployee, $limit, $offset, $startYear, $endYear)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                and formation.date >= ?
                and formation.date < ?
                order by date desc
                limit $limit
                offset $offset";
        $req = $this->executeRequest($sql, array($idEmployee, $startYear, $endYear));
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getPendingFormationsByEmployee($id)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                and employee_formation.id_formation_status = 2
                order by date desc";
        $req = $this->executeRequest($sql, array($id));
        $req->setFetchMode(PDO::FETCH_CLASS, 'FormationRepository');
        $result = $req->fetchAll();
        foreach ($result as $formation) {
            $this->setFormations($formation);
            $formation->setStatus($formation->getId(), $id);
        }
    }

    public function getPerformedFormationsByEmployeeOrderByDateAndPaginate($idEmployee, $limit, $offset)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                and employee_formation.id_formation_status = 5
                order by date desc
                limit $limit
                offset $offset";
        $req = $this->executeRequest($sql, array($idEmployee));
        $req->setFetchMode(PDO::FETCH_CLASS, 'FormationRepository');
        $result = $req->fetchAll();
        foreach ($result as $formation) {
            $formation->setStatus($formation->getId(), $idEmployee);
        }
        return $result;
    }

    public function getAjaxPerformedFormationsByEmployeeOrderByDateAndPaginate($idEmployee, $limit, $offset)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                and employee_formation.id_formation_status = 5
                order by date desc
                limit $limit
                offset $offset";
        $req = $this->executeRequest($sql, array($idEmployee));
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
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

    public function subscribeToFormation($idEmployee, $idFormation)
    {
        $sql = "insert into employee_formation (id_formation, id_employee, id_formation_status)
                values (?, ?, 2)";
        $this->executeRequest($sql, array($idFormation, $idEmployee));
        $this->getFormationsByEmployee($idEmployee);
    }

    public function unsubscribeToFormation($idEmployee, $idFormation)
    {
        $sql = "delete from employee_formation
                where id_employee = ?
                and id_formation = ?";
        $this->executeRequest($sql, array($idEmployee, $idFormation));
        $this->getFormationsByEmployee($idEmployee);
    }

    public function acceptFormation($idEmployee, $idFormation, $creditsFormation, $daysFormation)
    {
        $sql = "update employee_formation
        set id_formation_status = 1
        where id_employee = ?
        and id_formation = ?";
        $this->executeRequest($sql, array($idEmployee, $idFormation));
        $this->updateCreditsForEmployeeAfterAccept($idEmployee, $creditsFormation);
        $this->updateDaysForEmployeeAfterAccept($idEmployee, $daysFormation);
    }

    public function updateCreditsForEmployeeAfterAccept($idEmployee, $creditsFormation)
    {
        $sql = "update employee
        set credits_left = credits_left - $creditsFormation
        where id = ?";
        $this->executeRequest($sql, array($idEmployee));
    }

    public function updateDaysForEmployeeAfterAccept($idEmployee, $daysFormation)
    {
        $sql = "update employee
        set days_left = days_left - $daysFormation
        where id = ?";
        $this->executeRequest($sql, array($idEmployee));
    }

    public function updateCreditsForManagerAfterUnsubscribe($idEmployee, $creditsFormation)
    {
        $sql = "update employee
        set credits_left = credits_left + $creditsFormation
        where id = ?";
        $this->executeRequest($sql, array($idEmployee));
    }

    public function updateDaysForManageAfterUnsubscribe($idEmployee, $daysFormation)
    {
        $sql = "update employee
        set days_left = days_left + $daysFormation
        where id = ?";
        $this->executeRequest($sql, array($idEmployee));
    }

    public function refuseFormation($idEmployee, $idFormation)
    {
        $sql = "update employee_formation
        set id_formation_status = 3
        where id_employee = ?
        and id_formation = ?";
        $this->executeRequest($sql, array($idEmployee, $idFormation));
    }

    public function getEmployeeByTeam($id_team, $id_employee)
    {
        $sql = "select id, username, credits_left, days_left, image
                from employee
                where id_team = ?
                and id <> ?";
        $req = $this->executeRequest($sql, array($id_team, $id_employee));
        $req->setFetchMode(PDO::FETCH_CLASS, 'EmployeeRepository');
        return $req->fetchAll();
    }

    public function getOneEmployeeByTeam($id_employee)
    {
        $sql = "select id, username, credits_left, days_left, image
                from employee
                where id = ?";
        $req = $this->executeRequest($sql, array($id_employee));
        $req->setFetchMode(PDO::FETCH_CLASS, 'EmployeeRepository');
        $result = $req->fetch();
        $result->getPendingFormationsByEmployee($id_employee);
        return $result;
    }

    public function countFormationsByEmployee($idEmployee, $startYear, $endYear)
    {
        $sql = "select count(*)
                from employee_formation
                  inner join formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                  and (employee_formation.id_formation_status = 1 or employee_formation.id_formation_status = 2)
                  and formation.date >= ? and formation.date < ?";
        $req = $this->executeRequest($sql, array($idEmployee, $startYear, $endYear));
        return $req->fetchColumn();
    }

    public function countPerformedFormationsByEmployee($idEmployee)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_employee = ?
        and employee_formation.id_formation_status = 5";
        $req = $this->executeRequest($sql, array($idEmployee));
        return $req->fetchColumn();
    }

    public function countPendingFormationsByEmployee($idEmployee)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_employee = ?
        and employee_formation.id_formation_status = 2";
        $req = $this->executeRequest($sql, array($idEmployee));
        return $req->fetchColumn();
    }

    public function isPendingFormation($idFormation, $idEmployee)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_formation = ?
        and employee_formation.id_employee = ?
        and employee_formation.id_formation_status = 2";
        $req = $this->executeRequest($sql, array($idFormation, $idEmployee));
        return $req->fetchColumn();
    }

    public function isAvailableFormation($idFormation, $idEmployee)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_formation = ?
        and employee_formation.id_employee = ?
        and employee_formation.id_formation_status = 4";
        $req = $this->executeRequest($sql, array($idFormation, $idEmployee));
        return $req->fetchColumn();
    }

    public function isValidateFormation($idFormation, $idEmployee)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_formation = ?
        and employee_formation.id_employee = ?
        and employee_formation.id_formation_status = 1";
        $req = $this->executeRequest($sql, array($idFormation, $idEmployee));
        return $req->fetchColumn();
    }
} 
