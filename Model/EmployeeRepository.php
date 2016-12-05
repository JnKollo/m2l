<?php


class EmployeeRepository
{
    public function isAuthentificated($loginUsername, $loginPassword) {
        $sql = "select username, password
                from employee
                where username = :username and password = :password";
        $this->executeRequest($sql, array($loginUsername, $loginPassword));
    }
}