<?php
include ("config.php");

$req = mysqli_query($connect, "SELECT * FROM `reviews`;");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Отзывы:</h3>
    <?php while($reviews = mysqli_fetch_assoc($req)):?>
        <div style="border: 1px solid black;">
            <p>Название продукта: <?= $reviews["product_name"] ?>.</p><br>
            <p>Имя пользователя: <?= $reviews["user_name"] ?>.</p><br>
            <p>Комментарий: <?= $reviews["text"] ?>.</p><br>
            <p>Дата публикации: <?= $reviews["uploaded_at"] ?>.</p><br>
        </div>
    <?php $i++;
        endwhile;
    ?>
</body>
</html>