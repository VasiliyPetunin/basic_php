<?php
$path = "images/".$_FILES['img']['name'];
$f_type=$_FILES['img']['type'];
$filesize = filesize($_FILES['img']['tmp_name']);


if ($f_type == "image/gif" OR $f_type == "image/png" OR $f_type == "image/jpeg" OR $f_type == "image/JPEG" OR $f_type == "image/PNG" OR $f_type == "image/GIF") {
    if ($filesize > 1024 * 1024){
        die ("Файл превышает размер 1 МБ!");
    }
    if(move_uploaded_file($_FILES['img']['tmp_name'],$path)){
        echo $_FILES['img']['name']." успешно загружен!";
    } else {
        echo "Загрузка не выполнена";
    }
} else {
    echo "Допускается загрузка только изображений!";
}