<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="./css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="./css/fontawesome/css/solid.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <title>Todoist</title>
</head>
<body>

    <div class='container'></div>
        <div class="row align-items-center">
            <div class='col-3'></div>
            <div class='col-8'>

              <h1>TODOIST</h1>

<?php
    if (isset($_SESSION['login'])) {
        echo "<p>".$_SESSION['login']."&nbsp;<a href='controlador.php?accion=cerrar'>Cerrar Sesión</a></p>";
    }
    echo "<br>";

?>