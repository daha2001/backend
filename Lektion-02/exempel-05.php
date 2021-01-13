
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