<?php

$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC)
?>

<?php

require_once 'header.php'

?>

<div class="featured">
    <h2>Daniel och Marcus webshop</h2>
    <p>Kaffe vi gärna druckit om vi ej var fattiga studenter!</p>
</div>
<div class="recentlyadded content-wrapper">
    <h2>Våra 4 senaste tillagda produkter</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                <?=$product['price']?>
            </span>
        <?php endforeach; ?>
    </div>
</div>

<?php

require_once 'footer.php'

?>