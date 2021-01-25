<?php

$endpoint = "https://fakestoreapi.com/products";

$json = file_get_contents($endpoint);

//echo "<pre>";
print_r($json, JSON_PRETTY_PRINT);
//echo "</pre>";

$products = json_decode($json, true);


function womenClothes($array)
{
  foreach ($array as $key => $value) {
    if ($value['category'] != "electronics") {
        if ($value['category'] != "men clothing") {
            if ($value['category'] != "jewelery") {
                echo "<img src=" . $value['image'] . " class='img-fluid' width-512px>" . '<br>';
                echo '<h2>' . $value ['title'] . '</h2>' .  '<br>';
                echo '<h3>' . $value['price'] . '£' . '</h3>' . '<br>';
                echo $value['description'] . '<br>' . '<hr>';
    }

        }
}

}

}

function menClothes($array)
{
  foreach ($array as $key => $value) {
    if ($value['category'] != "electronics") {
        if ($value['category'] != "women clothing") {
            if ($value['category'] != "jewelery") {
                echo "<img src=" . $value['image'] . " class='img-fluid' width-512px>" . '<br>';
                echo '<h2>' . $value ['title'] . '</h2>' . '<br>';
                echo '<h3>' . $value['price'] . '£' . '</h3>' . '<br>';
                echo $value['description'] . '<br>';
                
    }

            }
        }
}

}

function jewelery($array)
{
  foreach ($array as $key => $value) {
    if ($value['category'] != "electronics") {
        if ($value['category'] != "women clothing") {
            if ($value['category'] != "men clothing") {
                echo "<img src=" . $value['image'] . " class='img-fluid' width-512px>" . '<br>';
                echo '<h2>' . $value ['title'] . '</h2>' . '<br>';
                echo '<h3>' . $value['price'] . '£' . '</h3>' . '<br>';
                echo $value['description'] . '<br>' . '<hr>';
    }

            }
        }
}

}
?>