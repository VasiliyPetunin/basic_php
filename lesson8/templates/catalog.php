<?php

require_once ("modules/config.php");
$req = mysqli_query($connect, "SELECT * FROM `products`;");

while($catalog = mysqli_fetch_assoc($req)):?>

    <div style="display: flex; flex-flow: column nowrap; margin-bottom: 20px; border: 1px solid black;">
        <a href="views/openPicture.php?photo=<?= $catalog['photo'] ?>" target="_blank">
            <img src="images/<?= $catalog['photo'] ?>" alt="<?= $catalog['photo'] ?>" style="width: 150px; height: 150px;">
        </a>
        <p><?= $catalog['product_name'] ?>.</p>
        <p>Cost of the product: <?= $catalog['product_cost'] ?> rubles.</p>
        <p>In stock: <?= $catalog['product_count'] ?></p>
        <a href="modules/server.php?id=<?= $catalog['id'] ?>"><button style="background-color: red; color: white;">Add to cart</button></a>
    </div>

<?php endwhile; ?>