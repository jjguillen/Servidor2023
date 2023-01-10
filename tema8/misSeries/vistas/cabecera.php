<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Series</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <h2>Mis Series</h2>

<?php
    if (isset($_SESSION['usuario'])) {
        echo "<h6 class='text-secondary'>Soy: ". unserialize($_SESSION['usuario'])->getEmail() ."</h6>";
    } else {
        echo "<script>window.location='enrutador.php?accion=inicio';</script>";
    }
?>

        <br>
        <div id="ajax">
    