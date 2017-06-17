<?php

namespace M2l\Model\Repository;

class EmployeeCounterRepository extends BaseRepository
{
    public function getDaysAccumulated($id_employee)
    {
        $sql = "select days_accumulated
                from formation_employee_counter
                where id_employee = ?";
        $req = $this->executeRequest($sql, array($id_employee));
        $result = $req->fetch(\PDO::FETCH_ASSOC);
        return $result['days_accumulated'];
    }

    public function getCreditsAccumulated($id_employee)
    {
        $sql = "select credits_accumulated
                from formation_employee_counter
                where id_employee = ?";
        $req = $this->executeRequest($sql, array($id_employee));
        $result = $req->fetch(\PDO::FETCH_ASSOC);
        return $result['credits_accumulated'];
    }
}
