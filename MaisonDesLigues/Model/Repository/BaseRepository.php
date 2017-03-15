<?php

namespace M2l\Model\Repository;

use M2l\Kernel\Model;

class BaseRepository extends Model
{
    private function getTableFromCallingClass() {
        $table = explode('\\', substr(strtolower(get_class($this)), 0, strlen('repository')*-1));
        return end($table);
    }

    public function getBy(array $field) {
        $table = $this->getTableFromCallingClass();
        $key = key($field);
        $value = $field[$key];
        $sql = "select *
                from $table
                where ? = ?";
        $req = $this->executeRequest($sql, array($key, $value));
        $result = $req->fetch();
        return $result;
    }

    public function getOneById($id)
    {
        $id = (int)$id;
        $table = $this->getTableFromCallingClass();
        $sql = "select *
                from $table
                where id = ?";
        $req = $this->executeRequest($sql, array($id));
        $result = $req->fetch();
        return $result;
    }

    public function getAll() {
        $table = $this->getTableFromCallingClass();
        $sql = "select *
                from $table";
        $req = $this->executeRequest($sql);
        $result = $req->fetchAll();
        return $result;
    }

} 
