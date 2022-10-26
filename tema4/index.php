<?php
/*
$fuente = fopen("lista.txt", "a+");
fwrite($fuente, "Hola Mundo\n");
fclose($fuente);
*/

$datos = file_get_contents("https://www.marca.com/futbol/barcelona/2022/10/26/63581e6246163f63748b45bc.html");
file_put_contents("noticia.html",$datos,FILE_APPEND|LOCK_EX);

//unlink("noticia.html");


?>