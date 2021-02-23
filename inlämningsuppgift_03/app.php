<?php

$endpoint = "http://localhost/inl%c3%a4mningsuppgift_03/webshop/Api.php";

$json = file_get_contents($endpoint);

$products = json_decode($json, true);

function product_1($array)
{

  $appearance = "";


  foreach ($array as $key => $value) {
    if ($value['name'] == "Daniels andra vrålåk") {

      $appearance .= "
        <div class='appearance'>
        <img class='img-thumbnail' src='$value[image]' alt='$value[image]'></a>
        <h6>
        $value[name]<h6>
        <h6>
        Pris: $value[price]kr</h6> 
        <p>"
        . $value['description'] .
        "</p>
        Antal kvar i lager: <span style='color:red;'><b>$value[stock]</b></span> st
        </div>"
        . "<br>";
    }
  }
  echo $appearance;

}

function product_2($array)
{

  $appearance = "";


  foreach ($array as $key => $value) {
    if ($value['name'] == "Lynchburg-lemonade") {

      $appearance .= "
        <div class='appearance'>
        <img class='img-thumbnail' src='$value[image]' alt='$value[image]'></a>
        <h6>
        $value[name]<h6>
        <h6>
        Pris: $value[price]kr</h6> 
        <p>"
        . $value['description'] .
        "</p>
        Antal kvar i lager: <span style='color:red;'><b>$value[stock]</b></span> st
        </div>"
        . "<br>";
    }
  }
  echo $appearance;

}

function product_3($array)
{

  $appearance = "";


  foreach ($array as $key => $value) {
    if ($value['name'] == "Nattuggla") {

      $appearance .= "
        <div class='appearance'>
        <img class='img-thumbnail' src='$value[image]' alt='$value[image]'></a>
        <h6>
        $value[name]</h6>
        <h6>
        Pris: $value[price]</h6> 
        <p>"
        . $value['description'] .
        "</p>
        Antal kvar i lager: <span style='color:red;'><b>$value[stock]</b></span> st
        </div>"
        . "<br>";
    }
  }
  echo $appearance;

}

function product_4($array)
{

  $appearance = "";


  foreach ($array as $key => $value) {
    if ($value['name'] == "Frangelico") {

      $appearance .= "
        <div class='appearance'>
        <img class='img-thumbnail' src='$value[image]' alt='$value[image]'></a>
        <h6>
        $value[name]<h6>
        <h6>
        Pris: $value[price]</h6> 
        <p>"
        . $value['description'] .
        "</p>
        Antal kvar i lager: <span style='color:red;'><b>$value[stock]</b></span> st
        </div>"
        . "<br>";
    }
  }
  echo $appearance;

}

function product_5($array)
{

  $appearance = "";


  foreach ($array as $key => $value) {
    if ($value['name'] == "Mugg") {

      $appearance .= "
        <div class='appearance'>
        <img class='img-thumbnail' src='$value[image]' alt='$value[image]'></a>
        <h6>
        $value[name]<h6>
        <h6>
        Pris: $value[price]kr</h6> 
        <p>"
        . $value['description'] .
        "</p>
        Antal kvar i lager: <span style='color:red;'><b>$value[stock]</b></span> st
        </div>"
        . "<br>";
    }
  }
  echo $appearance;

}

function product_6($array)
{

  $appearance = "";


  foreach ($array as $key => $value) {
    if ($value['name'] == "DVD film Golfaren") {

      $appearance .= "
        <div class='appearance'>
        <img class='img-thumbnail' src='$value[image]' alt='$value[image]'></a>
        <h6>
        $value[name]<h6>
        <h6>
        Pris: $value[price]kr</h6> 
        <p>"
        . $value['description'] .
        "</p>
        Antal kvar i lager: <span style='color:red;'><b>$value[stock]</b></span> st
        </div>"
        . "<br>";
    }
  }
  echo $appearance;

}

function product_7($array)
{

  $appearance = "";


  foreach ($array as $key => $value) {
    if ($value['name'] == "Georg") {

      $appearance .= "
        <div class='appearance'>
        <img class='img-thumbnail' src='$value[image]' alt='$value[image]'></a>
        <h6>
        $value[name]<h6>
        <h6>
        Pris: $value[price]kr</h6> 
        <p>"
        . $value['description'] .
        "</p>
        Antal kvar i lager: <span style='color:red;'><b>$value[stock]</b></span> st
        </div>"
        . "<br>";
    }
  }
  echo $appearance;

}

function product_8($array)
{

  $appearance = "";


  foreach ($array as $key => $value) {
    if ($value['name'] == "BMW 320") {

      $appearance .= "
        <div class='appearance'>
        <img class='img-thumbnail' src='$value[image]' alt='$value[image]'></a>
        <h6>
        $value[name]<h6>
        <h6>
        Pris: $value[price]kr</h6> 
        <p>"
        . $value['description'] .
        "</p>
        Antal kvar i lager: <span style='color:red;'><b>$value[stock]</b></span> st
        </div>"
        . "<br>";
    }
  }
  echo $appearance;

}

function product_9($array)
{

  $appearance = "";


  foreach ($array as $key => $value) {
    if ($value['name'] == "VW passat") {

      $appearance .= "
        <div class='appearance'>
        <img class='img-thumbnail' src='$value[image]' alt='$value[image]'></a>
        <h6>
        $value[name]<h6>
        <h6>
        Pris: $value[price]</h6> 
        <p>"
        . $value['description'] .
        "</p>
        Antal kvar i lager: <span style='color:red;'><b>$value[stock]</b></span> st
        </div>"
        . "<br>";
    }
  }
  echo $appearance;

}

function product_10($array)
{

  $appearance = "";


  foreach ($array as $key => $value) {
    if ($value['name'] == "AWP - Dragon-Lore") {

      $appearance .= "
        <div class='appearance'>
        <img class='img-thumbnail' src='$value[image]' alt='$value[image]'></a>
        <h6>
        $value[name]<h6>
        <h6>
        Pris: $value[price]</h6> 
        <p>"
        . $value['description'] .
        "</p>
        Antal kvar i lager: <span style='color:red;'><b>$value[stock]</b></span> st
        </div>"
        . "<br>";
    }
  }
  echo $appearance;

}

