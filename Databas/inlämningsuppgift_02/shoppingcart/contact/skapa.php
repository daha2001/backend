<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

    

<div class="row justify-content-center">
		<div class="col-12 col-md-10 col-lg-8 pb-6">


                    <form action="#" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Kontaktformulär</h3>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" name="name" placeholder="name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" name="epost" placeholder="e-post" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-5">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="message" placeholder="Skriv ett meddelande" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                <input type="submit" value="Skicka meddelandet" class="btn btn-info btn-block rounded-0 py-2"></a>
                                </div>
                            </div>
                            <div class="col-md-2 form-group">
                        <a href="../admin/index.php">
                        <input type="button" value="ADMIN"
                        class=" btn btn-success form-control">
                </a>
        </div>

                        </div>
                    </form>

        </div>
    </div>

    <?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once ("databas.php");

    $name = htmlspecialchars($_POST['name']);
    $name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
    $epost = htmlspecialchars($_POST['epost']);
    $epost = filter_var($epost, FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    $message = filter_var($message, FILTER_SANITIZE_SPECIAL_CHARS);

    
    $stmt = $conn->prepare("INSERT INTO contact (name, epost, message)
                                VALUES (:name , :epost , :message)");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':epost', $epost);
    $stmt->bindParam(':message', $message);

    $stmt->execute();

    $last_id = $conn->lastInsertId();

    echo    "<h1 style=text-align:center>Hej $_POST[name], ditt meddelande har skickats!</h1>";
    
}

?>
   


</body>
</html>
	
    