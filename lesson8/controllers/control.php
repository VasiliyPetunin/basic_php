<?php

$content = trim(strip_tags($_GET['content']));
if (!$content) {
    $content = "catalog";
} else {
    if ($content !== "orders" && $content !== "products" && $content !== "login" && $content !== "exit") {
        die ("Страница не найдена! Проверьте URL.");
    }
}