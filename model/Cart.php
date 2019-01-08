<?php
namespace app\model;

class  Cart extends Model{

    protected $id;
    protected $products;
    protected $totalPrice;
    protected $idUser;
    protected $date;
    protected $columns = ['id', 'products','totalPrice','idUser','date'];

    public function __construct($id=null, array $products=null, $totalPrice=null, $idUser=null, $date=null)
    {
        parent::__construct();
        $this->id = $id;
        $this->products = serialize($products);
        $this->totalPrice = $totalPrice;
        $this->idUser = $idUser;
        $this->date = $date;
    }


    public function setId($id){$this->id = $id;}
    public function setProducts($products){$this->products = serialize($products);}
    public function setIdUser($idUser){$this->idUser = $idUser;}
    public function setDate($date){$this->date = $date;}
    public function getId(){return $this->id;}
    public function getProducts(){return unserialize($this->products);} 
    public function getTotalPrice(){return $this->totalPrice;}
    public function getIdUser(){return $this->idUser;}
    public function getDate(){return $this->date;}
    
    public  function countTotalPrice($products){
        
        return 355;
    }
    public function getProductById($id){
       
    }
    public function getTableName()
    {
        return 'cart';
    }

}

