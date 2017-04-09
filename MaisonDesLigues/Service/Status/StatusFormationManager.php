<?php

namespace M2l\Service\Status;

use M2l\Model\Entity\Formation;

class StatusFormationManager
{
    public static function setStatusForOneFormation(Formation $formation, array $employeeFormations = null, &$isSubscribable) {
        $formation->setStatus('disponible');
        if(strtotime($formation->getDate()) < time()) {
            $isSubscribable = 0;
            $formation->setStatus('indisponible');
        }

        if ($employeeFormations[0]->getId()) {
            foreach($employeeFormations as $employeeFormation) {
                if($formation->getId() == $employeeFormation->getId()){
                    if ($employeeFormation->getStatus()['state_of_validation'] != 'en cours de validation') {
                        $isSubscribable = 0;
                    }
                    $formation->setStatus($employeeFormation->getStatus()['state_of_validation']);
                }
            }
        }
    }

    public static function setStatusForEachFormation(array $formations, array $employeeFormations = null) {
        foreach($formations as $formation) {
            $formation->setStatus('disponible');
            if(strtotime($formation->getDate()) < time()) {
                $formation->setStatus('indisponible');
            }

            if ($employeeFormations) {
                foreach($employeeFormations as $employeeFormation) {
                    if($formation->getId() == $employeeFormation->getId()){
                        $formation->setStatus($employeeFormation->getStatus()['state_of_validation']);
                        break;
                    }
                }
            }
        }

    }
}