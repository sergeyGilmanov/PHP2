<?php

namespace app\engine;

use app\traits\TSingletone;

class Db
{
    use TSingletone;

    private $config = [
        'engine' => 'mysql',
        'host' => 'localhost',
        'database' => 'myShop',
        'user' => 'root',
        'password' => '',
        'charset' => 'utf8'
    ];

    
    protected function prepareQueryString(){
        return sprintf("%s:host=%s;dbname=%s;charset=%s",
            $this->config['engine'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']);
    }

    private $options = [
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
    ];

    private $connect = null;    
    
    public function getConnection(){
        if(!$this->connect){
            $this->connect = new \PDO(
                $this->prepareQueryString(),
                $this->config['user'],
                $this->config['password'],
                $this->options
            );

        }
        return $this->connect;
    }

   
    public function query($sql, $param =[]){

        $statement = $this->getConnection()->prepare($sql);
        $statement->execute($param);
        return $statement;
    }

   
    public function execute($sql, $param = []){
        $this->query($sql, $param);
        return true;
    }

   
    public function queryOne($sql, $param = []) {
        var_dump($sql);
        return $this->queryAll($sql,$param)[0];
    }

  
    public function queryAll($sql, $param = []) {
        return $this->query($sql, $param)->fetchAll();
    }


}