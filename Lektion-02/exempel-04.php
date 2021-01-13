<h1>Arbeta med PHP-formulär</h1>
<h2>Skicka en POST-Request via ett formulär</h2>

<form action="exempel-05.php" method ="post">
    Vad heter du? <br>
    <input type="text" name="firstname">

    <input type="submit" value="skicka">
</form>

<?php
function print_array(){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

print_array($_GET);


$firstname = $_POST['firstname'] ?? "";
echo "<h1>HEJ  $firstname</h1>";


?>