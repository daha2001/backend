<?php
/* 
* att arbeta mot befintliga servrar
* ___________________________________________________
* hämta alla användare (users) från JSONPlaceholder
* visa en HTML-lista över användare
*/

// 1. Ange en endpoint/resurs
$url = "http://jsonplaceholder.typicode.com/users";

// 2. Hämta data i JSON-format (en sträng)
$json = file_get_contents($url);

// Testa att skriva ut (temporärt)
// echo $json;

// 3. Konvertera JSON till en php-Array
// Takes a JSON encoded string and converts it into a PHP variable
$array = json_decode($json, true);

// Testa att skriva ut arrayen (temporärt)
// multidimensionell associativ array
    echo "<pre>";
   // print_r($array);
    //echo "</pre";

// 4. Välj data från arrayen
foreach ($array as $key => $value) {
    // echo "key: " . $key; // 0123456789
    // echo '<hr>';
    // echo "value: ";
    // print_r($value); // OBS! $value är arrayer
    // echo '<hr>';
    echo "Name: " . $value['name'];
    echo '<br>';


}