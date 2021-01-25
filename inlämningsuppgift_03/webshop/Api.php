<?php
include("Product.php");
include("arrays.php");
header('Content-Type: application/json');
$products = array();



for ($i=0; $i < 10 ; $i++) { 
    $product = new Product($names[$i], $descriptions[$i], $images[$i], $prices[$i]);
    array_push($products, $product->toArray());
    
}

echo json_encode($products,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);