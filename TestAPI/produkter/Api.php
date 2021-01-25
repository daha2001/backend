<?php
include("Product.php");
include("arrays.php");

header('Content-Type: application/json');
$products = array();

//gör 10 produktjävlar (tror det ska vara 10) och pushar in dom i en äcklig jävla array


for ($i=0; $i < 10 ; $i++) { 
    $product = new Product($names[$i], $descriptions[$i], $images[$i], $maps[$i]);
    array_push($products, $product->toArray());
    
}

echo json_encode($products,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); 