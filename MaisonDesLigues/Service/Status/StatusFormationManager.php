<?php

namespace M2l\Service\Status;

class StatusFormationManager
{
    public static function setStatusForEachFormation(array &$formations, array &$employeeFormations) {
        foreach($formations as &$formation) {
            $formation['status'] = 'disponible';
            if(strtotime($formation['date']) < time()) {
                $formation['status'] = 'indisponible';
            }

            $formation['date'] = (date('d/m/Y', strtotime($formation['date'])));
            foreach($employeeFormations as &$myFormation) {
                if($formation['id'] == $myFormation['id']){
                    $formation['status'] = $myFormation['status']['state_of_validation'];
                }
                $myFormation['date'] = $formation['date'];
            }
        }
        unset($formation);
        unset($myFormation);
    }
}