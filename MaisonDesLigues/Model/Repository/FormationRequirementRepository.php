<?php

namespace M2l\Model\Repository;

use M2l\Kernel\Model;

class FormationRequirementRepository extends Model
{
    public function getAllByFormationId($formation_id) {
        $sql = "select *
                from formation_requirement
                INNER join requirement
                on formation_requirement.id_requirement = requirement.id
                where id_formation = ?";
        $req = $this->executeRequest($sql, array($formation_id));
        return $req->fetchAll(\PDO::FETCH_ASSOC);
    }
}
