<?php

require_once "index.php";

$id = $_GET['id'];


$sql = "DELETE FROM contact";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$rowCount = $stmt->rowCount();


