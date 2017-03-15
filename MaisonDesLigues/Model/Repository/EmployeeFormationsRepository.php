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

        return $result;
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
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
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
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        $this->addStatusToFormationList($result, $idEmployee);
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
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
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
        $req->setFetchMode(\PDO::FETCH_CLASS, 'FormationRepository');
        $result = $req->fetchAll();
        foreach ($result as $formation) {
            $this->setFormations($formation);
            $formation->setStatusForEmployeeFormation($formation->getId(), $id);
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
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        $this->addStatusToFormationList($result, $idEmployee);
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
}
