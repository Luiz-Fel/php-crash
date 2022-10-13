<?php 
    $y = 10;

    function registerUser($email) {
        //para usar a variavel $y dentro da função fazemos
        global $y;
        echo $email . ' registered';
        echo $y;
    }

    registerUser('test');

    function sum($n1 = 2, $n2 = 3) {
        return $n1 + $n2;
    };
    $x = sum();
    echo $x;

    $subtract = function ($n1, $n2) {
        return $n1 - $n2;
    };
    echo $subtract(10, 1);

    $multiply = fn($n1, $n2) => $n1 * $n2;
    echo $multiply(10, 2);
?>