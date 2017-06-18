<?php

namespace M2l\Service\Validation;


use M2l\Model\Entity\Employee;
use M2l\Model\Entity\Formation;

class EmployeeFormationChoice
{
    const DAYS_LIMIT = 15;
    const CREDITS_LIMIT = 5000;

    public function checkEmployeeInformation(Employee $employee, Formation $formation)
    {
        if(($employee->getDaysLeft() - $formation->getDays() > 0) && ($employee->getCreditsLeft() - $formation->getCredits() > 0)) {
            return true;
        } else {
            return false;
        }
    }

    public function checkEmployeeCounter(array $counter, Formation $formation)
    {
        if(($counter['days_accumulated'] + $formation->getDays() < self::DAYS_LIMIT) && ($counter['credits_accumulated'] + $formation->getCredits() < self::CREDITS_LIMIT)) {
            return true;
        } else {
            return false;
        }
    }

    public function isEligibleForFormation(array $counter, Formation $formation, Employee $employee)
    {
        if($this->checkEmployeeCounter($counter, $formation) && $this->checkEmployeeInformation($employee, $formation)) {
            return true;
        } else {
            return false;
        }
    }

}