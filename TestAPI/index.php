<?php

include_once 'app.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webshop</title>
    <link rel="stylesheet" href="styles.css">
    <a href="<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">"></a>
</head>
<body>
    <?php
    
    everythingFromApi($products);
    //womenClothes($products);
    ?>


</body>
</html>