<?php

    $fruits = ['apple', 'orange', 'pear'];

    //tamanho do array
    echo count($fruits);

    //procurar elemento no array
    var_dump(in_array('apple', $fruits));

    //--> Adicionar no array

    //adicionar no final
    $fruits[] = 'grape';
    //adicionar no final(muitos)
    array_push($fruits, 'blueberry', 'strawberry');
    //adicionar no início
    array_unshift($fruits, 'mango');
    print_r($fruits);

    //--> Remover do array

    //remover no final
    array_pop($fruits);
    //remove no início
    array_shift($fruits);
    //remove em posição específica
    unset($fruits[2]); // o unset remove até o index daquela posição(ela deixa de existir no array)
    print_r($fruits);

    $fruits[2] = 'mango';

    //Transformar em um array contendo arrays com grupos de n elementos
    //            [1,2,3,4]         =>       [[1,2], [3,4]]
    $chunked_array = array_chunk($fruits, 2);
    print_r($chunked_array);

    //Juntar arrays
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $arr3 = array_merge($arr1, $arr2);
    //usando spread operator [...]
    $arr4 = [...$arr1, ...$arr2];
    print_r($arr3);

    //Transformar o array em dicionario com chave -> elemento
    $a = ['green', 'red', 'yellow'];
    $b = ['avacado', 'apple', 'banana'];
    $c = array_combine($a, $b); //o primeiro é chave e o segundo é elemento

    print_r($c);

    //Transformar as chaves do array/dicionário em dicionário
    $keys = array_keys($c);
    print_r($keys);

    //Inverte a chave com o valor (valor passa a ser chave e vice-versa)
    $flipped = array_flip($c);
    print_r($flipped);

    //Cria dicionário do primeiro valor até o último valor
    $numbers = range(1, 20);
    print_r($numbers);


    //map
    $new_numbers = array_map(function($number) {
        return "Number ${number}";
    }, $numbers);

    print_r($new_numbers);

    //filter
    $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
    print_r($lessThan10);

    //reduce (vai passar pelo array inteiro e retornar um valor, o $carry é o acumulador)
    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    var_dump($sum);
?>