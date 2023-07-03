<?php

// Task 1:

echo "Task 1:<br>";

$a = (int)5;
$b = (int)5;

if ($a >= 0 && $b >= 0) {
    $c = $a - $b;
    echo "$c<br>";
} elseif ($a < 0 && $b < 0) {
    $c = $a * $b;
    echo "$c<br>";
} else {
    $c = $a + $b;
    echo "$c<br>";
}

// Task 2:

echo "Task2:<br>";

$a = 6;

switch ($a) {
    case 0:
        echo "0<br>";
    case 1:
         echo "1<br>";
    case 2:
        echo "2<br>";
    case 3:
        echo "3<br>";
    case 4:
        echo "4<br>";
    case 5:
        echo "5<br>";
    case 6:
        echo "6<br>";
    case 7:
        echo "7<br>";
    case 8:
        echo "8<br>";
    case 9:
        echo "9<br>";
    case 10:
        echo "10<br>";
    case 11:
        echo "11<br>";
    case 12:
        echo "12<br>";
    case 13:
        echo "13<br>";
    case 14:
        echo "14<br>";
    case 15:
        echo "15<br>";
}

// Task 3:

echo "Task3:<br>";

function sum ($a = 0, $b = 0) {
    return $a + $b;
}

function difference ($a = 0, $b = 0) {
    return $a - $b;
}

function prodOfNumb ($a = 0, $b = 0) {
    return $a * $b;
}

function quotient ($a = 0, $b = 0) {
    return $a / $b;
}

echo "sum:";
echo sum(5, 5);

echo "difference:";
echo difference(5, 5);

echo "prodOfNumb:";
echo prodOfNumb(5, 5);

echo "quotient:";
echo quotient(5, 5);

// Task 4:

echo "<br>Task4:<br>";

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+":
            echo "<br>sum:<br>";
            echo sum($arg1, $arg2);
            break;
        case "-":
            echo "<br>difference:<br>";
            echo difference($arg1, $arg2);
            break;
        case "*":
            echo "<br>prodOfNumb:<br>";
            echo prodOfNumb($arg1, $arg2);
            break;
        case "/":
            echo "<br>quotient:<br>";
            echo quotient($arg1, $arg2);
            break;
    }
}

mathOperation(5, 5, "+");
mathOperation(5, 5, "-");
mathOperation(5, 5, "*");
mathOperation(5, 5, "/");