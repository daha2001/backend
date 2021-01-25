
<link rel="stylesheet" href="styles.css">

<?php

$endpoint = "http://localhost/TestAPI/produkter/Api.php";

$json = file_get_contents($endpoint);



$products = json_decode($json, true);



function womenClothes($array)
{
  
  foreach ($array as $key => $value) {
    if ($value['name']) {
        
                echo "<img src=" . $value['image'] . " >" . '<br>';
                echo '<h2>' . $value ['name'] . '</h2>' .  '<br>';
                echo '<h3>' . $value['price'] . '£' . '</h3>' . '<br>';
                echo '<p>' . $value['description'] . '</h2>' . '<br>' . '<hr>';
    }

        }


}

function everythingFromApi($array)
{

  $address2 = "";


  foreach ($array as $key => $value) {
    if ($value['name']) {

      $address2 .= "
        <div class='address cool6'>
        <h2>
        $value[name]
        <h2>
        <img class='img-thumbnail' src='$value[image]' alt='$value[image]'></a>
        <h4>
        Antal kvar i lager: <span style='color:red;'><b>$value[stock]</b></span> st
        <h4>
        Pris: $value[price] £
        <p>"
        . "<h4>" . $value['description'] . "</h4>" .
        "</p>
        <hr>
        </div>";
    }
  }
  echo $address2;

}