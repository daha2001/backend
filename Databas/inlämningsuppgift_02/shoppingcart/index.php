<?php

include 'functions.php';
$pdo = pdo_connect_mysql();


//hemsidan är kopplad till home.php som standard
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';
?>