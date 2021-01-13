
<form action="#" method ="get">
    Ange förnamn <br>
    <input type="text" name="firstname"> <br>
    Ange efternamn <br>
    <input type="text" name="lastname">

    <input type="submit" value="skicka">
</form>

<?php



$firstname = $_GET['firstname'] ?? "";
$lastname = $_GET['lastname'] ?? "";
echo "$firstname . "." . $lastname . ";


?>
