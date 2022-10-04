<?php
    // 01_output.php
    // echo - como o print porém pode imprimir mais de um valor
    echo "1 valor", "2 valor";
    //print - imprime um valor apenas
    print "1 valor";
    //print_r - pode imprimir o valor de variáveis e arrays
    /*
    print_r([1,2,3]);
    */
    //var_dump - retorna o tipo da variável e seu comprimento
    var_dump(true);
    //var_export - retorna a representação de string da variável
    var_export("true");
?>
<?php 
//para tags php onde só temos o echo podemos também ter a representação abaixo
?>
<?= "1 valor encurtado"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= 'Post one'; ?></h1>
</body>
</html>