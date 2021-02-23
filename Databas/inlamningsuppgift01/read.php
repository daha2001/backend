<?php

 require_once ("database.php");

 $stmt = $conn->prepare("SELECT * FROM databasetable");

 $stmt->execute();

 $result = $stmt->fetchAll();

 $table = "
   <table class='table table-hover'>
   <tr>
     
       <th>Namn</th>
       <th>E-post</th>
       <th>Meddelande</th>
   </tr>
   ";

 foreach($result as $key => $value){

    $id = $value['id']; 

    $table .= "
        <tr>
      
            <td>$value[namn]</td>
            <td>$value[epost]</td>
            <td>$value[meddelande]</td>
            <td>
                <a href='delete.php?id=$value[id]'>Ta bort</a>
            </td>
        </tr>
    ";

 }

 $table .= "</table>";
 echo $table;
