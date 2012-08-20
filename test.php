<?php
require_once __DIR__.'/loader.php';
$product = Product::get(1);

var_dump($product);
?>