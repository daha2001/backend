<?php




require_once ("../contact/databas.php");


 $stmt = $conn->prepare("SELECT * FROM contact");


 $stmt->execute();


 $result = $stmt->fetchAll();

 $table = "
    <table class='table table-sm'>
    <tr class='table-dark'>
        <th>Namn</th>
        <th>E-Post</th>
        <th>Meddelande</th>
        <th>Admin</th>
    </tr>
    <a href='deleteall.php?id=0' 
            class='btn btn-sm btn-outline-danger'>
            Ta bort alla meddelanden
            </a>
    ";

 foreach($result as $key => $value){


    $id = $value['id'];  // Detta är en primärnyckel

    $table .= "
    
    <tr>
            <td>$value[name]</td>
            <td>$value[epost]</td>
            <td>$value[message]</td>
            <td>
            <a href='delete.php?id=$value[id]' 
               class='btn btn-sm btn-outline-danger'>Ta bort
            </td>
            
        </tr>
    ";

 }
 $table .= "</table>";

 echo $table;

?>
</body>
</html>