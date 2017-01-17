<?php

class FormationController
{
    public function home()
    {
        $employee = ['ok', 'tagueule', 'maboule'];
        $employeeFormations = ['wesh', 'ouaich'];

        return array(
            'employee' => $employee,
            'employeeFormations' => $employeeFormations);
        }
}

$formations = new FormationController();
$allFormations = json_encode($formations->home());

echo $allFormations;
?>