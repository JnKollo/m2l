<?php

require_once 'Framework/Model.php';

class SecurityRepository extends Model
{
    public function loginChecker($loginUsername, $loginPassword) {
        $sql = "select count(*)
                from employee
                where username = ? and password = ?";
        $req = $this->executeRequest($sql, array($loginUsername, $loginPassword));
        $result = $req->fetch();
        $hasAccount = ($result[0] > 0) ? true : false;
        $req->closeCursor();
        return $hasAccount;
    }

}