<?php
    
require_once "header.php";
require_once "../contact/databas.php";


$id = $_GET['id'];


$sql = "DELETE FROM contact WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$rowCount = $stmt->rowCount();


require_once "index.php";
require_once "footer.php";
