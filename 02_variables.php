<?php

// variaveis
//  ---- > variaveis devem ser escritas com $ e devem começar com uma lertra
//  ---- > variaveis não podem começar com números e só podem ter _ de símbolo
//  ---- > variaveis são case sensitive

$name = 'Jhon';
$age = 40;
$has_kids = true;
$cash_on_hand = 20.51;

//var_dump($cash_on_hand);

// string concatenada
echo $name . ' is ' . $age  . ' years old';
// fstring 
echo "${name} is  ${age} years old";
echo "2" + "2";

// constantes
// constantes são iniciadas com define
// constantes não prescisam do $
define('host', 'a string');
echo host;
?>