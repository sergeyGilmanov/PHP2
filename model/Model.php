<?php

namespace app\model;

use \app\engine\Db as Db;
use \app\interfaces\IModel as IModel;

abstract class Model implements IModel
{
    public $db;
    protected $columns = []; 

    public function __construct()
    {
       $this->db = Db::getInstance();
    }

    
    public function getOne($id) {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = :id";
        $obj = $this->db->query($sql, [':id'=>$id]);
        $obj -> setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, get_class($this));
        return $obj->fetch();
    }

    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }
    abstract public function getTableName();

    
    public function delete()
    {
        $sql = "DELETE FROM {$this->getTableName()} WHERE id = :id";
        return $this->db->execute($sql, [':id'=>$this->id]);
    }

    
    public function insert()
    {
        $sql = "INSERT INTO {$this->getTableName()} ({$this->getFields()}) VALUES ({$this->getValues()})";
      
        return $this->db->execute($sql, $this->getParams());
    }

    public function save()
    {
       
    }

    public function update()
    {
        $sql = "UPDATE {$this->getTableName()} SET {$this->getUpdateFields()} WHERE id = :id";
        
        return $this->db->execute($sql, $this->getParams());

    }

 
    public function getUpdateFields(){
        $tmp = '';
        foreach ($this->columns as $val){
            $tmp .= " $val = :$val,";
        }
        $tmp = substr_replace( $tmp, '', -1);
        
        return $tmp;
    }
  
    public function getFields() : string {

        return implode(', ', $this->columns);
    }

    
    public  function getValues() : string {
        $tmp = implode( ', :',$this->columns);
        $tmp = ':' . $tmp;
       
        return $tmp;
    }

   
    public  function getParams() : array {
        $params =[];
        foreach ($this->columns as $val){
            $params[':'. $val] = $this->$val;
        }
      
        return $params;
    }

}