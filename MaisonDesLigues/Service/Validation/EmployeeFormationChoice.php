<?php

namespace M2l\Service\Validation;


class EmployeeFormationChoice
{
    const DAYS_LIMIT = 15;
    const CREDITS_LIMIT = 5000;

    public function checkEmployeeInformation(array $employee, array $formation)
    {
        if(($employee['days_left'] - $formation['days'] > 0) && ($employee['credits_left'] - $formation['credits'] > 0)) {
            return true;
        } else {
            return false;
        }
    }

    public function checkEmployeeCounter(array $counter, array $formation)
    {
        if(($counter['days_accumulated'] + $formation['days'] < self::DAYS_LIMIT) && ($counter['credits_accumulated'] + $formation['days'] < self::CREDITS_LIMIT)) {
            return true;
        } else {
            return false;
        }
    }

    public function isEligibleForFormation(array $counter, array $formation, array $employee)
    {
        if($this->checkEmployeeCounter($counter, $formation) && $this->checkEmployeeInformation($employee, $formation)) {
            return true;
        } else {
            return false;
        }
    }

}