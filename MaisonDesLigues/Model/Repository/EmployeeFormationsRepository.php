<?php

namespace M2l\Model\Repository;

class EmployeeFormationsRepository extends BaseRepository
{
    public function getFormationsByEmployee($idEmployee)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                order by date desc";
        $req = $this->executeRequest($sql, array($idEmployee));
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        $this->addStatusToFormationList($result, $idEmployee);
        return $this->hydrateEntityForEachResult($result, 'Formation');
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
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        $this->addStatusToFormationList($result, $idEmployee);
        return $this->hydrateEntityForEachResult($result, 'Formation');
    }

    public function getOneFormationByEmployee($idEmployee, $idFormation)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                and formation.id = ?
                order by date desc";
        $req = $this->executeRequest($sql, array($idEmployee, $idFormation));
        $result = $req->fetch(\PDO::FETCH_ASSOC);
        $this->addStatusToFormation($result, $idEmployee);
        return $this->hydrateOneEntity($result, 'Formation');
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
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $this->hydrateEntityForEachResult($result, 'Formation');
    }

    public function getPendingFormationsByEmployee($idEmployee)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                and employee_formation.id_formation_status = 2
                order by date desc";
        $req = $this->executeRequest($sql, array($idEmployee));
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
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
        return (int)$req->fetchColumn();
    }

    public function countPerformedFormationsByEmployee($idEmployee)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_employee = ?
        and employee_formation.id_formation_status = 5";
        $req = $this->executeRequest($sql, array($idEmployee));
        return (int)$req->fetchColumn();
    }

    public function countPendingFormationsByEmployee($idEmployee)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_employee = ?
        and employee_formation.id_formation_status = 2";
        $req = $this->executeRequest($sql, array($idEmployee));
        return (int)$req->fetchColumn();
    }

    public function subscribeToFormation($idEmployee, $idFormation)
    {
        $sql = "insert into employee_formation (id_formation, id_employee, id_formation_status)
                values (?, ?, 2)";
        $this->executeRequest($sql, array($idFormation, $idEmployee));
    }

    public function unsubscribeToFormation($idEmployee, $idFormation)
    {
        $sql = "delete from employee_formation
                where id_employee = ?
                and id_formation = ?";
        $this->executeRequest($sql, array($idEmployee, $idFormation));
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

    public function refuseFormation($idEmployee, $idFormation)
    {
        $sql = "update employee_formation
        set id_formation_status = 3
        where id_employee = ?
        and id_formation = ?";
        $this->executeRequest($sql, array($idEmployee, $idFormation));
    }

    public function setStatusForEmployeeFormation($idFormation, $idEmployee)
    {
        $sql = "select state_of_validation
        from formation_status
        inner join employee_formation
        on formation_status.id = employee_formation.id_formation_status
        where employee_formation.id_formation = ?
        and employee_formation.id_employee = ?";
        $req = $this->executeRequest($sql, array($idFormation, $idEmployee));
        return $req->fetch(\PDO::FETCH_ASSOC);
    }

    public function addStatusToFormationList(array &$formations, $idEmployee)
    {
        foreach ($formations as &$formation) {
            $formation['status'] = $this->setStatusForEmployeeFormation($formation['id'], $idEmployee);
        }
        unset($formation);
    }

    public function addStatusToFormation(&$formation, $idEmployee)
    {
        $formation['status'] = $this->setStatusForEmployeeFormation($formation['id'], $idEmployee);
        unset($formation);
    }
}
