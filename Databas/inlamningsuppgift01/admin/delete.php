<?php

require_once ("../database.php");
require_once ("index.php");


$id = $_GET['id'];


$sql = "DELETE FROM databasetable WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$rowCount = $stmt->rowCount();

