<?php
session_start(); 
    include('cabecera.php');

    function pintarFormulario() {

        echo "<div class='container'>
        <div class='row' style='width: 280px;'>
          <form action='controlador.php' method='post' > 
              <div class='mb-3'>
                  <label for='exampleInputEmail1' class='form-label'>Login</label>
                  <input type='text' name='login' class='form-control' aria-describedby='emailHelp'>
              </div>
              <div class='mb-3'>
                  <label for='exampleInputPassword1' class='form-label'>Password</label>
                  <input type='password' name='password' class='form-control'>
              </div>
              <button type='submit' name='acceso' class='btn btn-primary'>Enviar</button>
          </form>
        </div>
      </div>";

    }


    //Comprobar errores de login
    if (isset($_GET['error'])) {
        echo "<p class='text-danger'>".$_GET['error']."</p>";
    }

    pintarFormulario();

    include("pie.php");
?>
