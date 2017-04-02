<?php

namespace M2l\Model\Repository;

use M2l\Kernel\Model;

class SecurityRepository extends Model
{
    public function emailChecker($email) {
        $sql = "select count(*)
                from employee
                where email = ?";
        $req = $this->executeRequest($sql, array($email));
        $result = $req->fetch();
        $hasEmail = ($result[0] > 0) ? true : false;
        $req->closeCursor();
        return $hasEmail;
    }

    public function loginChecker($email, $password) {
        $sql = "select count(*)
                from employee
                where email = ? and password = ?";
        $req = $this->executeRequest($sql, array($email, $password));
        $result = $req->fetch();
        $hasAccount = ($result[0] > 0) ? true : false;
        $req->closeCursor();
        return $hasAccount;
    }

    public function getIdByEmailAndPassword($email, $password)
    {
        $sql = "select id
                from employee
                where email = ? and password = ?";
        $req = $this->executeRequest($sql, array($email, $password));
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