<?php

define("SITE_TITLE", "Web Acadamy AB");

//variabler
$name = "Daniel";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exempel 2</title>
</head>
<body>

<h1>PHP - EXEMPEL 2</h1>
<h2>variabler och konstanter</h2>
<h3> <?php echo SITE_TITLE ?></h3>

<?php


echo "<h3>Hello $name!</h3>";

// OBS: apostrof istället. den struntar i variabeln($)
echo '<h3>Hello $name!</h3>';

// konkatenering i PHP. (OBS! en punkt används för att konkatenera)
echo "Hej " . $name . "!";
echo "<br>";
echo strlen($name);
echo "<br>";

?>

</body>
</html>