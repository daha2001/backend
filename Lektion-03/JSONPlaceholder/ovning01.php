<?php

App::main();

class App{

    public static $endpoint = "https://api.namnapi.se/v2/names.json";

    public static function main(){
    
        try{
            $array = self::getData();
            echo "<pre>";
             print_r($array);
             echo "</pre>";
            self::viewData($array);
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }


public static function getData(){

    $json = @file_get_contents(self::$endpoint);
    // @ = Error Control Operator
    if(!$json)
        throw new Exception("Cannot access " .  self::$endpoint);

    // Test
    // echo $json;

    // Returnera data som en PHP_Array
    return json_decode($json, true);
}

public static function viewData($array){
   // print_r($array);
   $table = "<table class='table'>";
   $table .= "<tr><th>firstname</th><th>surname</th></tr>";
    foreach ($array as $key => $value) {
       $table .= "<tr>
       <td>$value[firstname] </td>
       <td>$value[surname] </td>
       </tr>";
    }

   $table .= "</table>";

   echo $table;
}

}
