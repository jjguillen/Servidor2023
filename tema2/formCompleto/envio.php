<?php

    include('../lib.php');

    //Lectura de los datos del formulario
    echo filtrado($_POST['firstName'])."<br>";
    echo filtrado($_POST['lastName'])."<br>";
    echo filtrado($_POST['username'])."<br>";
    echo filtrado($_POST['email'])."<br>";
    echo filtrado($_POST['address'])."<br>";
    echo filtrado($_POST['address2'])."<br>";
    echo $_POST['country']."<br>";
    echo filtrado($_POST['zip'])."<br>";

    //Campo select
    if (isset($_POST['conf'])) {
        foreach($_POST['conf'] as $opcion)
            echo $opcion."<br>";
    }

    echo $_POST['paymentMethod']."<br>";
    echo filtrado($_POST['cc-name'])."<br>";
    echo filtrado($_POST['cc-number'])."<br>";
    echo filtrado($_POST['cc-expiration'])."<br>";
    echo filtrado($_POST['cc-cvv'])."<br>";


    //Subida de ficheros en formularios
    if (strlen($_FILES['imgfile']['name']) > 0) {
        
        echo "Tratando el fichero ...";
        $nombreArchivo = $_FILES['imgfile']['name'];
        $archivoTemp = $_FILES['imgfile']['tmp_name'];
        $tipoArchivo = $_FILES['imgfile']['type'];

        //Comprobar la extensión del archivo es válida - OPCIONAL (seguridad)
        $extensionesValidas = array("jpg", "png", "gif");
        $arrayArchivo = pathinfo($nombreArchivo);
        $extension = $arrayArchivo['extension'];
        // Comprobamos la extensión del archivo
        if(!in_array($extension, $extensionesValidas)){
            $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";
        }
        //Fin OPCIONAL 

        //Mostrar los posibles errores en la subida del archivo
        if (isset($errores)) {
            foreach($errores as $error) {
                echo $error."<br>";
            }
        } else {
            //Movel el archivo temporal a la carpeta que decidamos
            $nombreCompleto = "./imgDownload/".$nombreArchivo;
            move_uploaded_file($archivoTemp, $nombreCompleto);
            print "El archivo se ha subido correctamente";
        }

    }













    //Generar un pedido y cobrar la pasta

?>