<?php

    class VistaFormularioPrestamo {

        public static function render($libros,$usuarios){
          
          ?>
     
        
     
          <div class="card-body">
          <div class="p-5">
              <div class="text-center">

              </div>
              <form class="user" id='formCrear'>
              <div class='mb-3'>

        
              
              <div class='mb-3'>
                <select class='form-control' name='idUsuario'>
                    <option selected>Selecciona Usuario</option>
                    <?php 
                    foreach($usuarios as $usuario){
                
                     echo '<option  value="'.$usuario->getIdUsuario().'">'.$usuario->getNombre().'</option>';
                    }
                    ?>
                </select> 
              </div>
           
              <div class='mb-3'>
                <select class='form-control' name='idLibro'>
                    <option selected>Selecciona Libro</option>
                    <?php 
                    foreach($libros as $libro){
                
                     echo '<option  value="'.$libro->getIdLibro().'">'.$libro->getTitulo().'</option>';
                    }
                    ?>
                </select> 
              </div>

                      <div class='mb-3'>
                          <label for='Fecha Inicio' class='form-label'>fecha Inicio</label> <br>
                          <input type='date' name='fechaInicio' class='form-control '>
                      </div>

                      <div class='mb-3'>
                          <label for='Fecha Final' class='form-label'>Fecha Final</label> <br>
                          <input type='date' name='fechaFin' class='form-control form-control-user'>
                      </div>
                    
                      <div class='mb-3'>
                          <label for='Estado' class='form-label'>Estado</label>
                          <select class='form-control' name="estado" id="estado">
                            <option selected>Eligue Estado</option>
                            <option value="Activo">Activo</option>
                            <option value="Devuelto">Devuelto</option>
                            <option value="SobrePasado1Mes">SobrePasado1Mes</option>
                            <option value="SobrePasado1Año">SobrePasado1Año</option>
                          </select>

                      </div>
                      
                        <button class='btn btn-dark btn-user btn-block' type='submit' accion='crear'>Crear</button>
              </form>
              <hr>
          </div>
      </div>
      </div>


     
      <?php
      

    }

  }
?>