

<?php

    //LIBRERÍA DE FUNCIONES PHP USADA EN EL TEMA 2


    //Función para pintar un menú en eje1.php
    function pintarEntradaMenu($categoria,$fichero) {
        if (strcmp($_GET['categoria'],$categoria) == 0) {
            echo '<li class="nav-item"><a href="'.$fichero.'?categoria='.$categoria.'" class="nav-link active" aria-current="page">'.$categoria.'</a></li>';        
        } else {
            echo '<li class="nav-item"><a href="'.$fichero.'?categoria='.$categoria.'" class="nav-link" aria-current="page">'.$categoria.'</a></li>';
        }
    }

    function pintarEntradaMenuPrimero($categoria,$fichero) {
        echo '<li class="nav-item"><a href="'.$fichero.'?categoria='.$categoria.'" class="nav-link" aria-current="page">'.$categoria.'</a></li>';
           
    }


    //Función para limpiar los input de los formularios
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }

?>