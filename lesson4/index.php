<meta charset="utf-8">

<?php
$images = scandir("images");

for($i=2; $i < count($images); $i++){?>
    <a href="openIMG.php?img=<?= $images[$i]?>" target="_blank"><img width="500" height="500" src="images/<?= $images[$i]?>" alt="<?= $images[$i]?>"></a><br><br>
<?php
}
?>

<hr>

<form action="server.php" method="post" enctype="multipart/form-data">
    <p style="font-size: 200%;">Выберите файл</p>
    <input type="file" name="img" style="font-size: 150%;"><br><br>
    <input type="submit" value="Загрузить" style="font-size: 150%;">
</form>