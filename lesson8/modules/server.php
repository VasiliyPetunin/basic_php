<?php

require_once ("config.php");

$product_id = trim(strip_tags($_GET['id']));

$req = mysqli_query($connect, "SELECT * FROM `products` WHERE id=$product_id;");

$products[] = mysqli_fetch_assoc($req);

if ($products) {
    header("Location: ../index.php");
} else {
    die ("Something went wrong!");
}

