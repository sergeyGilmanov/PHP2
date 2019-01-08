<?php
namespace app\model;

class  Order extends Model{

    protected $id;
    protected $products;
    protected $totalPrice;
    protected $idUser;
    protected $date;
    protected $deliveryAdress;
    protected $isPayed;
    protected $isDelivered;
    protected $columns = ['id', 'products','totalPrice','idUser','date','deliveryAdress','isPayed','isDelivered'];

    public function __construct(
        $id = null,
        $products=null,
        $totalPrice = null,
        $idUser = null,
        $date = null,
        $deliveryAdress = null,
        $isPayed = false,
        $isDelivered = false
    )
    {
        parent::__construct();
        $this->id = $id;
        $this->products = serialize($products);
        $this->totalPrice = $totalPrice;
        $this->idUser = $idUser;
        $this->date = $date;
        $this->deliveryAdress = $deliveryAdress;
        $this->isPayed = $isPayed;
        $this->isDelivered = $isDelivered;
    }

   
    public function setId($id){$this->id = $id;}
    public function setProducts($products){$this->products = serialize($products);}
    public function setIdUser($idUser){$this->idUser = $idUser;}
    public function setDate($date){$this->date = $date;}
    public function setIsPayed($isPayed){$this->isPayed = $isPayed;}
    public function setIsDelivered($isDelivered){$this->isDelivered = $isDelivered;}
    public function setDeliveryAdress($deliveryAdress){$this->deliveryAdress = $deliveryAdress;}
    public function getId(){return $this->id;}
    public function getProducts(){return unserialize($this->products);}
    public function getTotalPrice(){return $this->totalPrice;}
    public function getIdUser(){return $this->idUser;}
    public function getDate(){return $this->date;}
    public function getisPayed(){return $this->isPayed;}
    public function getisDelivered(){return $this->isDelivered;}
    public function getDeliveryAdress(){return $this->deliveryAdress;}
    
    public  function countTotalPrice(array $product){
        
        return 355;
    }



    public function getTableName(){
        return 'orders';
    }
}