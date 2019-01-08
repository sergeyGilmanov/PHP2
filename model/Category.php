<?php

namespace app\model;

class Category extends Model
{
    protected $id;
    protected $name;
   
    protected $columns = ['id', 'name'];

 
    public function __construct($id = null, $name = null)
    {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(){return $this->id;}
    public function setId($id){$this->id = $id;}
    public function getName(){return $this->name;}
    public function setName($name){$this->name = $name;}
    public function getTableName()
    {
        return 'category';
    }
}