<?php

//require_once 'order.php';

require_once 'header.php';

?>

<div class="placeorder content-wrapper">
    <h1>Your Order Has Been Placed</h1>
    <p>Thank you for ordering with us, we'll contact you by email with your order details (if this was a real store &#128064;).</p>
</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once ("contact/databas.php");

    $name = htmlspecialchars($_POST['name']);
    $name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
    $tel = htmlspecialchars($_POST['tel']);
    $tel = filter_var($tel, FILTER_SANITIZE_SPECIAL_CHARS);
    $epost = htmlspecialchars($_POST['epost']);
    $epost = filter_var($epost, FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
    $adress = htmlspecialchars($_POST['adress']);
    $adress = filter_var($adress, FILTER_SANITIZE_SPECIAL_CHARS);

    
    $stmt = $conn->prepare("INSERT INTO customer (name, tel, epost, adress)
                                VALUES (:name , :tel , :epost , :adress)");

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':epost', $epost);
    $stmt->bindParam(':adress', $adress);

    $stmt->execute();
    
   // $sql = $conn->prepare("INSERT INTO order (productId, customerId, date_added) 
   //                         FROM (:products.productId, :customerId, :CURRENT_TIMESTAMP)");
   // 
   //$conn->exec($sql);
   
   $sql = $conn->prepare( "SELECT products.productId, Customer.CustomerId'
          FROM products, customer
        FULL OUTER JOIN order ON 'Order.productId=products.productId'");

    $sql->execute();

    
}

require_once 'footer.php'

?>