<?php include 'App.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fake Store API</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-12">
        <h1 style="text-align:center">FAKE STORE API</h1>
        <hr>
        <h1 style="text-align:center">WOMEN</h1>
        <?php
        womenClothes($products);
        ?>
        <h1 style="text-align:center">MEN</h1>
        <hr>
        <?php
        menClothes($products);
        ?>
        <h1 style="text-align:center">JEWELERY</h1>
        <hr>
       <?php
       jewelery($products);
       ?>
      <div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

</body>

</html>