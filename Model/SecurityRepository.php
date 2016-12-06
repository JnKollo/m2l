<?php

require_once 'Framework/Model.php';

class SecurityRepository extends Model
{
    public function isAuthentificated($loginUsername, $loginPassword) {
        $sql = "select username, password
                from employee
                where username = ? and password = ?";
        $req = $this->executeRequest($sql, array($loginUsername, $loginPassword));
        $result = $req->fetchAll();
        return $result;
    }
}