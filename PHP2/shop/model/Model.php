<?php


namespace app\model;

use interfaces\IModel;
use \engine\Db as Db;

abstract class Model implements IModel
{
    protected $db;


    public function __construct(Db $db)
    {
        $this->db = $db;
    }

    public function getOne($id) {
        $tableName = getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = {$id}";
        return $this->db->queryOne($sql);
    }

    public function getAll() {
        $tableName = getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }


}