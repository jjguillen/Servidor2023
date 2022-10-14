<?php session_start();?>

  <?php
    include("cabecera.php"); 
    include("lib.php");
  ?>


<div class="col-md-7 col-lg-8">
    <h4 class="mb-3">Añadir producto</h4>

    <form action="controlador.php" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="" required>
            </div>

            <div class="col-sm-6">
              <label for="categoria" class="form-label">Categoría</label>
              <select class="form-control" id="categoria" name="categoria" placeholder="" value="" required>
                <option value="pantalones running">Pantalones de running</option>
                <option value="zapatillas running">Zapatillas para correr</option>
                <option value="zapatillas trail">Zapatillas para trotar por el campo</option>
              </select>
            </div>
           

            <div class="col-sm-12">
              <label for="descripcion" class="form-label">Descripcion</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="" value="" required>
            </div>

            <div class="col-sm-3">
              <label for="precio" class="form-label">Precio</label>
              <input type="number" class="form-control" id="precio" name="precio" placeholder="" value="" min="1" required>
            </div>

            <div class="col-sm-9">
              <label for="imagen" class="form-label">Imagen</label>
              <input type="text" class="form-control" id="imagen" name="imagen" placeholder="" value="" min="1" required>
            </div>

          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" name="nuevoProducto" type="submit">Nuevo</button>
        </form>
      </div>
    </div>



  <?php
    include("pie.php"); 
  ?>