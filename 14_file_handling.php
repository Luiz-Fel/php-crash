<?php

// File reading
// podemos usar funções buildt in do php para ler/ escrever arquivos no servidor

$file = 'extras/users.txt';

if (file_exists($file)) {
   // echo readfile($file) uma versão mais simples
   $handle = fopen($file, 'r'); // abre o arquivo no modo r -> read
   $contents = fread($handle, filesize($file)); // lê os arquivos e determina o tamanho do texto
   fclose($handle); // fecha o arquivo
   echo $contents;
} else{
    $handle = fopen($file, 'w');
    $contents = 'Brad' . PHP_EOL . 'Sara' . PHP_EOL . 'Mike';
    fwrite($handle, $contents);
    fclose($handle);
    echo $contents;
}

?>