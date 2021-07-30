<meta charset="utf-8">

<?php
include ("config.php");

$req = mysqli_query($connect, "SELECT id, name, path FROM images;");

while($images = mysqli_fetch_assoc($req)) {?>
    <a href="openIMG.php?id=<?= $images["id"]?>" target="_blank">
        <img width="500" height="500" src="<?= $images["path"]?>" alt="<?= $images["name"]?>">
    </a><br><br>
<?php } ?>


