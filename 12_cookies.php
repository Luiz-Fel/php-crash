<?php 


//cookies
//mecanismo para guardar dados no browser e retorna eles quando o usuário visitar de novo


//criar cookie
setcookie('name', 'Brad', time() + 86400 * 30);


if(isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400);
?>