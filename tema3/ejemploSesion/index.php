<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $nombres = array("Javi","Emi","Pilar","Carlos");
        $edades = array(33,22,22,21);

        $_SESSION['nombres'] = $nombres;
        $_SESSION['edades'] = $edades;
        

    ?>

    <a href="./info.php">Info</a>

</body>
</html>