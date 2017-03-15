<?php

namespace M2l\Model;

use M2l\Kernel\Model;

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

    public function getIdByLoginAndPassword($login, $password)
    {
        $sql = "select id
                from employee
                where username = ? and password = ?";
        $req = $this->executeRequest($sql, array($login, $password));
        $result = $req->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }

    public function login($id)
    {
        $sql = "UPDATE employee SET online = 1, last_login = NOW() WHERE id = ?";
        $this->executeRequest($sql, array($id));
    }

    public function logout($id)
    {
        $sql = "UPDATE employee SET online = 0 WHERE id=?";
        $this->executeRequest($sql, array($id));
    }

}