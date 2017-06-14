<?php

namespace M2l\Model\Repository;

class EmployeeFormationsRepository extends BaseRepository
{
    /**
     * @param $idEmployee
     * @return array
     */
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

    /**
     * @param $idEmployee
     * @param $idFormation
     * @return array|int|\M2l\Model\Entity\Employee|\M2l\Model\Entity\Formation
     */
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

    /**
     * @param $idEmployee
     * @return array
     */
    public function getEmployeeRegisteredFormations($idEmployee)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                and employee_formation.id_formation_status = 1
                or employee_formation.id_formation_status = 2
                or employee_formation.id_formation_status = 5
                order by date desc";
        $req = $this->executeRequest($sql, array($idEmployee));
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $this->hydrateEntityForEachResult($result, 'Formation');
    }

    /**
     * @param $idEmployee
     * @return array
     */
    public function getPerformedFormationsByEmployee($idEmployee)
    {
        $sql = "select formation.*
                from formation
                inner join employee_formation
                    on formation.id = employee_formation.id_formation
                where employee_formation.id_employee = ?
                and employee_formation.id_formation_status = 5
                order by date desc";
        $req = $this->executeRequest($sql, array($idEmployee));
        $result = $req->fetchAll(\PDO::FETCH_ASSOC);
        return $this->hydrateEntityForEachResult($result, 'Formation');
    }

    /**
     * @param $idEmployee
     * @return array
     */
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

    /**
     * @param $idEmployee
     * @param $startYear
     * @param $endYear
     * @return int
     */
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

    /**
     * @param $idEmployee
     * @return int
     */
    public function countPerformedFormationsByEmployee($idEmployee)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_employee = ?
        and employee_formation.id_formation_status = 5";
        $req = $this->executeRequest($sql, array($idEmployee));
        return (int)$req->fetchColumn();
    }

    /**
     * @param $idEmployee
     * @return int
     */
    public function countPendingFormationsByEmployee($idEmployee)
    {
        $sql = "select count(*)
        from employee_formation
        where employee_formation.id_employee = ?
        and employee_formation.id_formation_status = 2";
        $req = $this->executeRequest($sql, array($idEmployee));
        return (int)$req->fetchColumn();
    }

    /**
     * @param $idEmployee
     * @param $idFormation
     */
    public function subscribeToFormation($idEmployee, $idFormation)
    {
        $sql = "insert into employee_formation (id_formation, id_employee, id_formation_status)
                values (?, ?, 2)";
        $this->executeRequest($sql, array($idFormation, $idEmployee));
    }

    /**
     * @param $idEmployee
     * @param $idFormation
     */
    public function unsubscribeToFormation($idEmployee, $idFormation)
    {
        $sql = "delete from employee_formation
                where id_employee = ?
                and id_formation = ?";
        $this->executeRequest($sql, array($idEmployee, $idFormation));
    }

    /**
     * @param $idEmployee
     * @param $creditsFormation
     */
    public function updateCreditsForEmployeeAfterAccept($idEmployee, $creditsFormation)
    {
        $sql = "update employee
        set credits_left = credits_left - $creditsFormation
        where id = ?";
        $this->executeRequest($sql, array($idEmployee));
    }

    /**
     * @param $idEmployee
     * @param $daysFormation
     */
    public function updateDaysForEmployeeAfterAccept($idEmployee, $daysFormation)
    {
        $sql = "update employee
        set days_left = days_left - $daysFormation
        where id = ?";
        $this->executeRequest($sql, array($idEmployee));
    }

    /**
     * @param $idEmployee
     * @param $creditsFormation
     */
    public function updateCreditsForManagerAfterUnsubscribe($idEmployee, $creditsFormation)
    {
        $sql = "update employee
        set credits_left = credits_left + $creditsFormation
        where id = ?";
        $this->executeRequest($sql, array($idEmployee));
    }

    /**
     * @param $idEmployee
     * @param $daysFormation
     */
    public function updateDaysForManageAfterUnsubscribe($idEmployee, $daysFormation)
    {
        $sql = "update employee
        set days_left = days_left + $daysFormation
        where id = ?";
        $this->executeRequest($sql, array($idEmployee));
    }

    /**
     * @param $idEmployee
     * @param $idFormation
     * @param $creditsFormation
     * @param $daysFormation
     */
    public function acceptFormation($idEmployee, $idFormation, $creditsFormation, $daysFormation)
    {
        $sql = "update employee_formation
        set id_formation_status = 1
        where id_employee = ?
        and id_formation = ?";
        $this->executeRequest($sql, array($idEmployee, $idFormation));
        $this->updateCreditsForEmployeeAfterAccept($idEmployee, $creditsFormation);
        $this->updateDaysForEmployeeAfterAccept($idEmployee, $daysFormation);
        $this->updateCounterFormationByYearForEmployeeAfterAccept($idEmployee, $daysFormation, $creditsFormation);
    }

    /**
     * @param $idEmployee
     * @param $idFormation
     */
    public function refuseFormation($idEmployee, $idFormation)
    {
        $sql = "update employee_formation
        set id_formation_status = 3
        where id_employee = ?
        and id_formation = ?";
        $this->executeRequest($sql, array($idEmployee, $idFormation));
    }

    /**
     * @param $idFormation
     * @param $idEmployee
     * @return mixed
     */
    public function getStatusForEmployeeFormation($idFormation, $idEmployee)
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

    /**
     * @param array $formations
     * @param $idEmployee
     */
    public function addStatusToFormationList(array &$formations, $idEmployee)
    {
        foreach ($formations as &$formation) {
            $formation['status'] = $this->getStatusForEmployeeFormation($formation['id'], $idEmployee);
        }
        unset($formation);
    }

    /**
     * @param $formation
     * @param $idEmployee
     */
    public function addStatusToFormation(&$formation, $idEmployee)
    {
        $formation['status'] = $this->getStatusForEmployeeFormation($formation['id'], $idEmployee);
        unset($formation);
    }

    public function updateCounterFormationByYearForEmployeeAfterAccept($idEmployee, $formationDays, $formationCredits)
    {
        $sql = "update formation_employee_counter
        set days_accumulated = days_accumulated + ?,
        credits_accumulated = credits_accumulated + ?
        where id_employee = ?";
        $this->executeRequest($sql, array($formationDays, $formationCredits, $idEmployee));
    }

    public function updateCounterFormationByYearForEmployeeAfterRemove($idEmployee, $formationDays, $formationCredits)
    {
        $sql = "update formation_employee_counter
        set days_accumulated = days_accumulated - ?,
        credits_accumulated = credits_accumulated - ?
        where id_employee = ?";
        $this->executeRequest($sql, array($formationDays, $formationCredits, $idEmployee));
    }
}
