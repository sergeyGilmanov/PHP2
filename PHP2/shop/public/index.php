<?php
include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


$product = new model\Products(new engine\Db());


var_dump($product);