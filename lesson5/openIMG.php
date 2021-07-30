<?php
include ("config.php");


$get = $_GET['id'];

$sqlReq = "SELECT id, name, path FROM images WHERE id = $get;";

$req = mysqli_query($connect, $sqlReq);

$image = mysqli_fetch_assoc($req);
?>

<img src="<?= $image["path"] ?>" alt="<?= $image["name"] ?>">