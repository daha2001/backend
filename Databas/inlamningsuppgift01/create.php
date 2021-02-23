
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once ("database.php");


    $namn       = htmlspecialchars($_POST['namn']);
    $epost      = htmlspecialchars($_POST['epost']);
    $meddelande = htmlspecialchars($_POST['meddelande']);

    $namn       = filter_var($namn, FILTER_SANITIZE_SPECIAL_CHARS);
    $epost      = filter_var($epost, FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
    $meddelande = filter_var($meddelande, FILTER_SANITIZE_SPECIAL_CHARS);
    

    $stmt = $conn->prepare("INSERT INTO databasetable (namn, epost, meddelande)
                                VALUES (:namn , :epost , :meddelande)");


    $stmt->bindParam(':namn', $namn);
    $stmt->bindParam(':epost', $epost);
    $stmt->bindParam(':meddelande', $meddelande);


    $stmt->execute();

    // Hämta sista id som infogats A_I
    $last_id = $conn->lastInsertId();

    $message = "<div class='alert alert-success' role='alert'>
                    <p>$namn har sparats i databasen med id=$last_id</p>
                </div>";      
}

?>


<form action="#" method="post" class="row">
        <div class="col-md-6 form-group">
            <input name="namn" type="text" required
            class="form-control" placeholder="Namn">
        </div>        
        <div class="col-md-6 form-group">
            <input name="epost" type="email" required
            class="form-control" placeholder="E-post">
        </div>       
        <div class="col-md-12 form-group">
            <textarea name="meddelande" cols="30" rows="5" required
            class="form-control" placeholder="Skriv ditt meddelande"></textarea>
        </div>
        <div class="col-md-4 form-group">
            <input type="submit" value="Skicka"
            class="btn btn-success form-control">
        </div>
        <div class="col-md-2 form-group">
            <a href="../../Databas/inlamningsuppgift01/admin/index.php">
            <input type="button" value="ADMIN"
            class=" btn btn-success form-control">
            </a>
        </div>
    </form>
  
  <?php
  if(isset($message))
  echo $message;
  ?>
