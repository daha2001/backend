<?php
require_once 'header.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_GET['id'])) {
        $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);


    require_once ("contact/databas.php");

    $name = htmlspecialchars($_POST['name']);
    $name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
    $tel = htmlspecialchars($_POST['tel']);
    $tel = filter_var($tel, FILTER_SANITIZE_SPECIAL_CHARS);
    $epost = htmlspecialchars($_POST['epost']);
    $epost = filter_var($epost, FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
    $adress = htmlspecialchars($_POST['adress']);
    $adress = filter_var($adress, FILTER_SANITIZE_SPECIAL_CHARS);

    $productId = $product['id'];

    
    $stmt = $conn->prepare("INSERT INTO customer (name, tel, epost, adress)
                                VALUES (:name , :tel , :epost , :adress)");


    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':epost', $epost);
    $stmt->bindParam(':adress', $adress);
    
    $stmt->execute();


    // 1. Hämta allt från tabellen customer
    // 2. Hämta enbart den senast tillagda kunden
    // 3. Skicka arrayen till variabeln customer


    $stmt3 = $pdo->prepare('SELECT * FROM customer ORDER BY date_added DESC LIMIT 1');
    $stmt3->execute();
    $customer = $stmt3->fetch(PDO::FETCH_ASSOC);
    
    // plocka ut customersId från tabellen customer

    $customerId = $customer['customersId'];
    

    $stmt2 = $conn->prepare("INSERT INTO orders (productId, customerId)
                            VALUES (:productId, :customerId)");


    $stmt2->bindParam(':productId', $productId);
    $stmt2->bindParam(':customerId', $customerId);
    
    $stmt2->execute();

    ?>

<div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed</h1>
    <p>Thank you <?php echo "<b>" . $customer['name'] . "</b>"?> for ordering with us.</p>

    <p>You have succesfully ordered <?php echo "<b>" . $product['name']. "</b>"?></p>

    <p>we'll sending your order details to <?php echo "<b>" . $customer['epost'] . "</b>"?>.</p>
</div>

<?php

                            


}
}


require_once 'footer.php'

?>
