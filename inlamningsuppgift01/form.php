<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

<style>
    .error {color: #FF0000;}
</style>

</head>
<body>
    
<?php
// sätt tomma värden på variabler
$firstNameError = "";
$lastNameError = "";
$firstname = "";
$lastname = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstNameError = "First name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // leta efter bokstäver och mellanslag
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
      $firstNameError = "Only letters allowed";
    }
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["lastname"])) {
    $lastNameError = "Last name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // leta efter bokstäver och mellanslag
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
      $lastNameError = "Only letters allowed";
    }
  }
}

function test_input($data) {
  $data = htmlspecialchars($data);
  return $data;
}

?>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
Ange förnamn <br>
    <input type="text" name="firstname"> 
  <span class="error">* <?php echo $firstNameError;?></span>
  <br><br>
  Ange efternamn <br>
    <input type="text" name="lastname">
  <span class="error">* <?php echo $lastNameError;?></span>
  <br><br>
  <input type="submit" name="submit" value="Confirm new e-mail">  
</form>

<?php
$search = array('å','ä','ö','Å','Ä','Ö',' ');
$replace = array('a','a','o','a','a','o','');
$firstname = str_replace($search, $replace, $firstname);
$lastname = str_replace($search, $replace, $lastname);
$firstname = strtolower($firstname);
$lastname = strtolower($lastname);

if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname . $lastname)){
    echo "<br> No numbers allowed";
}else if (strlen($firstname) + strlen($lastname) <= "20") {
    echo "<br> Your e-mail: ";
    echo $firstname . "." . $lastname . "@yh.nackademin.se";
}else {
    echo "only a total of 20 letters is allowed in your e-mail.";
}
?>

</body>
</html>
