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
    echo $_POST['name'];
    echo $_POST['age'];
}
?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30">Click</a>

<!-- Forms -->
<!-- forms podem ser usados tanto para GET quanto pra POST -->
<!-- O padrão é get mas se tu quiser usar o POST você tem que mudar no atributo do form method="POST" -->
<!-- O GET só é geralmente usado quando você quer buscar algo -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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