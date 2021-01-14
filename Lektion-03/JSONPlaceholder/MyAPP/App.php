<?php

//App::main();

class App{

    public static $endpoint = "https://jsonplaceholder.typicode.com/users";

    public static function main(){
    
        try{
            $array = self::getData();
            // print_r($array);
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
   $table .= "<tr><th>Name</th><th>Email</th><th>Street</th></tr>";
    foreach ($array as $key => $value) {
        $nyvariabel = $value['address']['street'];
        $table .= "<tr>
        <td>$value[name] </td>
        <td>$value[email] </td>
        <td>$nyvariabel </td>
        </tr>";
    }

   $table .= "</table>";

   echo $table;
}

}
