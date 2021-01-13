<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ovning01</title>
</head>
<body>

<h1>Hämta för- och efternamn med GET-request</h1>
<ul>
<li><a href="ovning01.php">ovning01.php</a>
<li><a href="ovning01.php?firstname=Daniel">ovning01.php?firstname=Daniel</a>
<li><a href="ovning01.php?lastname=Håkansson">ovning01.php?lastname=Håkansson</a>
<li><a href="ovning01.php?firstname=Daniel&lastname=Håkansson">ovning01.php?firstname=Daniel&lastname=Håkansson</a>
</ul>

<?php

/*
- Hämta förnamn och efternamn via en GET_Request (via URLen).
- Använd två olika nycklar (keys) t.ex. firstname och lastname.
- Lagra data i två olika variabler.
- Skriv ut en hälsningsfras i webbläsaren (visa hela namnet).
- Visa lämpliga felmeddelanden om förnamn eller efternamn saknas!
*/

echo "<pre>";
print_r($_GET);
echo "</pre>";
$firstname = $_GET['firstname'] ?? "SAKNAS";
$lastname = $_GET['lastname'] ?? "SAKNAS";
echo "<p>Hej $firstname $lastname!</p>";



?>
</body>
</html>