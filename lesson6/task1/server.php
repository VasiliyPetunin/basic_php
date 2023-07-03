<?php
$firstNumber = (int)trim(strip_tags($_GET['firstNumber']));
$secondNumber = (int)trim(strip_tags($_GET['secondNumber']));
$operation = (string)$_GET['operation'];


function calc ($firstNumber, $secondNumber, $operation) {
    switch ($operation) {
        case "+":
            $sum = $firstNumber + $secondNumber;
            echo "Сумма чисел равна ".$sum.".";
            break;
        case "-":
            $diff = $firstNumber - $secondNumber;
            echo "Разность чисел равна ".$diff.".";
            break;
        case "*":
            $multiplication = $firstNumber * $secondNumber;
            echo "Произведение чисел равно ".$multiplication.".";
            break;
        case "/":
            if ($secondNumber === 0) {
                die ("Делить на ноль нельзя!");
            }
            $division = $firstNumber / $secondNumber;
            echo "Частное чисел равно ".$division.".";
            break;
    }
}

calc($firstNumber, $secondNumber, $operation);