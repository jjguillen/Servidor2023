<?php
session_start();

include("lib.php");


//ACCIONES CON GET
if ($_GET) {

    //Acciones ----------------------------------------------------------------
    if (isset($_GET['accion'])) {

        //Acción de añadir al carrito
        if ($_GET['accion'] == "comprar") {

            //Añadir el producto con id $_GET['id'] al carrito de la compra
            //Comprobamos si ya está añadido ese producto en el carro
            //OJO que en el foreach hay que usar referencias &  +++++++++++++++++++++
            $encontrado = false;
            foreach($_SESSION['carro'] as &$lineaCarro) {
                if ( $lineaCarro['id'] == $_GET['id']) {
                    $lineaCarro['cant']++;
                    $encontrado = true;
                    break;
                }
            }
            if (!$encontrado) {
                //Buscamos el producto que hemos añadido en el array de sesión de producto
                foreach($_SESSION['productos'] as $producto) {
                    if ($producto['id'] == $_GET['id']) {
                        array_push($_SESSION['carro'], ['id' => $producto['id'], 'nombre' => $producto['nombre'], 'descripcion' => $producto['descripcion'], 'cant' => 1, 'precio' => $producto['precio']]);
                    }
                }
                
            }

            //Redirigo a index.php
            header("Location: index.php");
        }

         //Acción de comprar todo lo que hay en el carrito
        if ($_GET['accion'] == "finalizarCompra") {
            $_SESSION['carro'] = array();
            header("Location: carro.php");
        }

    }
}










//ACCIONES CON POST
if ($_POST) {

    if (isset($_POST['nuevoProducto'])) {
        $nombre = filtrado($_POST['nombre']);
        $categoria = filtrado($_POST['categoria']);
        $precio = filtrado($_POST['precio']);
        $descripcion = filtrado($_POST['descripcion']);
        $imagen = filtrado($_POST['imagen']);

        //Calculamos el id mayor
        $ids = array_column($_SESSION['productos'], 'id');
        $id = max($ids) + 1;

        array_push($_SESSION['productos'], ['id' => $id, 'nombre' => $nombre, 'descripcion' => $descripcion, 'imagen' => $imagen, 'precio' => $precio, 'categoria' => $categoria]);

        header("Location: index.php");
    }

}


?>