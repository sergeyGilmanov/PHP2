<?php


namespace app\prototype;

trait Cart
{
    private $id;
    private $products = [];
    private $totalPrice;
    private $idUser;
    private $date;
    public function setId($id){$this->id = $id;}
    public function setProducts($products){$this->products = $products;}
    public function setIdUser($idUser){$this->idUser = $idUser;}
    public function setDate($date){$this->date = $date;}
    public function getId(){return $this->id;}
    public function getProducts(){return $this->products;}
    public function getTotalPrice(){return $this->totalPrice;}
    public function getIdUser(){return $this->idUser;}
    public function getDate(){return $this->date;}
    public  function countTotalPrice(array $product){
        return;
    }
}