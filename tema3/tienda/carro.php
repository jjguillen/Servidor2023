<?php session_start();?>

  <?php
    include("cabecera.php"); 
    include("lib.php");
  ?>

  <?php
    //Pintamos el carro de la compra

    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre</th><th>Descripción</th><th>Cantidad</th><th>Precio</th><th>Subtotal</th><th>Acciones</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach($_SESSION['carro'] as $lineaCarro) {
      echo "<tr>";
      echo "<td>".$lineaCarro['nombre']."</td><td>".$lineaCarro['descripcion']."</td><td>".$lineaCarro['cant']."</td><td>".$lineaCarro['precio']."€</td><td>".($lineaCarro['precio'] * $lineaCarro['cant'])."€  </td>";
      echo "<td><a href='controlador.php?accion=eliminar&id=".$lineaCarro['nombre']."'>X</a></td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "<tfoot>";
    echo "<tr><td colspan='4'>Total</td><td class='text-danger'>".total($_SESSION['carro'])."€</td></tr>";
    echo "</tfoot>";
    echo "</table>";

  ?>

  <a href='controlador.php?accion=finalizarCompra' class='btn btn-primary'>Hacer pedido</a>

  <?php
    include("pie.php"); 
  ?>