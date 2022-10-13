<?php

$string = 'Hello World';

//tamanho da string
echo strlen($string);
echo '<br/>';

//posição do primeira vez que tiver
echo strpos($string, 'o');
echo '<br>';

//posição do última vez que tiver
echo strrpos($string, 'o');
echo '<br>';

//reverte a string
echo strrev($string);
echo '<br>';

//converter tudo pra minúsculo
echo strtolower($string);
echo '<br>';

//converter tudo pra maiúsculo
echo strtoupper($string);
echo '<br>';

//trocar parte da string
echo str_replace('World', 'Everyone', $string);
echo '<br>';

//retornar parte da string
echo substr($string, 0, 5); // de 0 a 5
echo '<br>';
echo substr($string, 5); // de 5 em diante

// se começa com
if (str_starts_with($string, 'Hello')) {
    echo 'Yes';
}

// se termina com
if (str_ends_with($string, 'ld')) {
    echo 'Yes';
}



//  HTML
// você PRECISA usar o htmlspecialchars por questões de segurança
// usa principalmente em forms
$string2 = '<script>alert</alert>';
echo htmlspecialchars($string2);


//printf

printf('%d+%d=%d', 1, 1, 1+1);



?>