

<?php
$stmt = $pdo->prepare('SELECT * FROM products');
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<?php

require_once 'header.php'

?>

<div class="products content-wrapper">
    <h1>Våra produkter</h1>
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                <?=$product['price']?>
            </span>

        </a>
        <?php endforeach; ?>
    </div>


<?php

require_once 'footer.php'

?>