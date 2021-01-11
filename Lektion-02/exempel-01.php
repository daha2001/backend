<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exempel 1</title>
</head>
<body>
    <h1>Arbeta med GET-Request</h1>
    <p>
    <a href="?name=Daniel&order=1234">http://localhost/Lektion-02/exempel-01.php?name=Daniel</a>
    
    </p>
    <p>
    <a href="?name=bajskorv&order=98765">http://localhost/Lektion-02/exempel-01.php?name=bajskorv</a>
    
    </p>

    <?php

function print_array($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

print_array($_POST);

// Funktionen isset
if(isset($_GET['name'])){
    echo "<h1>Hello " . $_GET['name'] . "</h1";
}
else{
    echo "<h1>Hello</h1>";
}

// Ternary
$order= isset($_GET['order']) ? $_GET['order'] : 'ORDERNUMMER SAKNAS';
echo "<h2>Ditt ordernummer är: $order</h2>";

// Nullförening operator
$total = $_GET['total'] ?? 0; // enbart för att slippa en varning



?>

</body>
</html>



