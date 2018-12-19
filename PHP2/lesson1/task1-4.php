<?php
/**
 * Created by PhpStorm.
 * Author: Gilmanov Sergey
 * Date: 12/18/2018
 * Time: 10:14 PM
 */

class Product {
    protected $id;
    public $countryOfOrigin;
    public $manufacturer;
    public $ageCategory;


    public function __construct($id = null, $countryOfOrigin = null, $manufacturer = null, $ageCategory = null)
    {
        $this->id = $id;
        $this->countryOfOrigin = $countryOfOrigin;
        $this->manufacturer = $manufacturer;
        $this->ageCategory = $ageCategory;
    }

    public function render(){
        echo "<ul><li>{$this->id}</li><li>{$this->countryOfOrigin}</li><li>{$this->manufacturer}</li><li>{$this->ageCategory}</li></ul>";
    }
}





class Category extends Product{
    public $productCategory;

    public function __construct($id = null, $countryOfOrigin = null, $manufacturer = null, $ageCategory = null, $productCategory = null)
    {
        parent::__construct($id, $countryOfOrigin, $manufacturer, $ageCategory);
        $this->productCategory = $productCategory;
    }

    public function render(){
        echo "<h1>{$this->productCategory}</h1>";
        parent::render();
    }
}


$watch = new Category(12315, 'Russian', 'Moscow of time', '18-35', 'watch');
$watch->render();
