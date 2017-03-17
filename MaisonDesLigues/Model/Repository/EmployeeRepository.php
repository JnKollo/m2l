<?php

namespace M2l\Model\Repository;

class EmployeeRepository extends BaseRepository
{
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

    public function getEmployeeByTeam($team_id, $id_employee)
    {
        $sql = "select id, username, credits_left, days_left, image
                from employee
                where team_id = ?
                and id <> ?";
        $req = $this->executeRequest($sql, array($team_id, $id_employee));
        return $req->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getOneEmployeeByTeam($id_employee)
    {
        $sql = "select id, username, credits_left, days_left, image
                from employee
                where id = ?";
        $req = $this->executeRequest($sql, array($id_employee));
        $result = $req->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
} 
