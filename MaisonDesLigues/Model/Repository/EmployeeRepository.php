<?php

namespace M2l\Model\Repository;

class EmployeeRepository extends BaseRepository
{
    public function getEmployeeByTeam($team_id, $id_employee)
    {
        $sql = "select id, username, credits_left, days_left, image
                from employee
                where team_id = ?
                and id <> ?";
        $req = $this->executeRequest($sql, array($team_id, $id_employee));
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $this->hydrateEntityForEachResult($result, 'Employee');

    }

    public function getOneEmployeeByTeam($id_employee)
    {
        $sql = "select id, username, credits_left, days_left, image
                from employee
                where id = ?";
        $req = $this->executeRequest($sql, array($id_employee));
        $result = $req->fetch(\PDO::FETCH_ASSOC);
        return $this->hydrateOneEntity($result, 'Employee');
    }

    public function hasEnoughDays($id_employee, $daysToSusbstract)
    {
        $sql = "select counter_formation_days_by_year
                from employee 
                where id = ?";
        $req = $this->executeRequest($sql, array($id_employee));

        $counter_formation_days_by_year = $req->fetch(\PDO::FETCH_ASSOC);

        if ((int)$counter_formation_days_by_year + $daysToSusbstract < 15) {
            return true;
        } else return false;
    }
} 
