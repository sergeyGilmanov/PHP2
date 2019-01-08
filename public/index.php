<?php
define('ROOT_DIR', __DIR__ . "/../");
include ROOT_DIR . "engine/Autoload.php";

use \app\model\Products as Products;    
use app\engine\Db; 

spl_autoload_register([new \app\engine\Autoload(), 'loadClass']);

$product = (new Products())->getOne(6);
var_dump($product);
$order = (new \app\model\Order())->getOne(2);
var_dump($order);
$cart = (new \app\model\Cart()) -> getOne(2);
var_dump($cart);
$category = (new \app\model\Category()) ->getOne(2);
var_dump($category);



