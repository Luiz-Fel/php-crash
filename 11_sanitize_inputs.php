<?php

//GET e POST


// tu já sabe sobre
//basicamente tu pega informação de um site(url) pelo GET
//e posta informação em um site(url) com o POST
//usa pra passar informação e pra fazer formulários


/* 
    da pra passar dados por meio da url 
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Brad">Click</a>
                                                 (aqui)         
    nesse caso temos uma variável name que podemos pegar pelo GET
*/
//pra não ficar dando os warnings a gente geralmente usa expressões como o isset




if (isset($_POST['submit'])) /* checa a existência do submit(se existe então é porque enviou) */ { 
    // Também temos que usar o htmlspecialchars na hora de pegar os dados para garantir que não serão executados scripts 
    /*
        ERRADO   XXX echo $_POST['name']; XXX
        ERRADO   XXX echo $_POST['age']; XXX
    */
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    //ou
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    //ou
    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
}
?>

<!-- Forms -->
<!-- forms podem ser usados tanto para GET quanto pra POST -->
<!-- O padrão é get mas se tu quiser usar o POST você tem que mudar no atributo do form method="POST" -->
<!-- O GET só é geralmente usado quando você quer buscar algo -->

<!-- ATENÇÃO, você também usa o htmlspecialchars na variavel do action se não fica vunerável -->
<form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>