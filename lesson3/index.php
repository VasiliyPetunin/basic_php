<?php

// Task1:
echo "Task1:<br>";

$i = 0;
while ($i <= 100) {
    if ($i % 3 === 0) {
        echo "$i<br>";
    }
    $i++;
}

// Task2:
echo "Task2:<br>";

function explainNumber ($num) {
    if ($num === 0) {
        echo "$num - ноль<br>";
    } elseif ($num % 2 === 0) {
        echo "$num - чётное число<br>";
    } else {
        echo "$num - нечётное число<br>";
    }
}

$i = 0;

do {
    explainNumber($i);
    $i++;
} while ($i <= 10);

// Task3:
echo "Task3:<br>";

$areas = ["Московская область" => ["Москва", "Зеленоград", "Клин"], "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"]];

foreach ($areas as $region => $cities) {
    echo "$region:<br>";
    foreach ($cities as $city) {
        if ($cities[count($cities) - 1] === $city) {
            echo "$city.<br>";
        } else {
            echo "$city, ";
        }
    }
    echo "<hr>";
}

// Task4:
echo "Task4:<br>";

?>