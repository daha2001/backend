<?php


// 1. Skapa en HTTP-header med innehållstypen JSON (Content-Type).
header("Content-Type: application/json; charset=UTF-8");

// 2. Skapa två PHP-arrayer för att lagra förnamn och efternamn.
// $firstNames = ["Åsa", "Mahmud", "Kalle", "FN 4",  "FN 5", "Adam"];
$maleNames = ["Mahmud", "Kalle", "Adam", "Bertil", "Caesar"];
$femaleNames = ["Åsa", "Eva", "Linda", "Helena", "Anna"];
$lastNames = ["Öberg", "Al Hakim", "Johansson", "Nilsson", "Ericsson"];

// Uppgift
// Uppgift, del 1: Värde för kön (gender)
$gender = ["male", "female"];


// 3. Skapa 10 olika namn (förnamn och efternamn)
//    och spara dessa i en ny array som heter names.

$names = [];

for ($i=0; $i < 10 ; $i++) {

    $gen = $gender[rand(0, count($gender) - 1)];

    if($gen == "male") $firstname = $maleNames[rand(0, count($maleNames) - 1)];
    else  $firstname = $femaleNames[rand(0, count($femaleNames) - 1)];

    $lastname = $lastNames[rand(0, count($lastNames) - 1)];
  
    $name = array(
        "firstname" => $firstname,
        "lastname" =>  $lastname,
        "gender" => $gen,
        "age" => rand(1,100), // Värde för ålder (age) slump mellan 1-100
        "email" => dataControls($firstname) . "." . dataControls($lastname) . "@exempel.com" // Lägg till e-postadress utifrån firstname och lastname
    );
    
    array_push($names, $name);

}

// 4. Konvertera PHP-arrayen till en JSON-string.
$json = json_encode($names, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

// Skicka JSON till klienten.
echo $json;

    /**
     * Funktionen dataControls filtrerar och returnerar input från krav # 3-6 i specifikationen
     */

    function dataControls($input)
    {
        # Krav 3. Bara små bokstäver
        $input = strtolower($input);

        # Krav 4. Inga blanka tecken
        $input = str_replace(" ", "", $input);

        # Krav 5. å och ä blir a
        $input = str_replace("å", "a", $input);
        $input = str_replace("Å", "a", $input);
        $input = str_replace("ä", "a", $input);
        $input = str_replace("Ä", "a", $input);

        # Krav 6. ö blir o
        $input = str_replace("ö", "o", $input);
        $input = str_replace("Ö", "o", $input);

        return $input;
    }

    ?>