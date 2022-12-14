<?php

    class VistaPeliculaDetalle {

        public static function render($pelicula, $criticas) {

            include("./vistas/cabecera.php");

            echo ' <div class="album py-5 bg-light">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';


                echo ' <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>'.$pelicula->getTitulo().'</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">'.$pelicula->getTitulo().'</text>
                  <image href="'.$pelicula->getCartel().'" width="100%"/>
                  </svg>
      
                  <div class="card-body">
                    <p class="card-text">'.$pelicula->getTitulo().'</p>
                    <p class="card-text">'.$pelicula->getDirector().'</p>
                    <p class="card-text">'.$pelicula->getYear().'</p>                    
                    <p class="card-text">'.$pelicula->getSinopsis().'</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                        <button id="verCriticas" type="button" class="btn btn-sm btn-outline-secondary">Criticas</button>
                      </div>
                      <small class="text-muted">Nota: '.$pelicula->getNotaImdb().'</small>
                    </div>
                  </div>
                </div>
              </div>';

              echo "<div class='col' id='criticas'>
                <h3>CRÍTICAS</h3>
                <ul class='list-group'>";

              foreach($criticas as $critica) {
                echo "<li class='list-group-item'><p>".$critica->nick." - ".$critica->getNota()."</p><p>".$critica->getTexto()."</p></li>";
              }
              
              echo"
                </ul>";

              //Botón de añadir críticas 
              if (isset($_SESSION['usuario'])) {
                echo '<button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#nuevaCritica">
                +
                </button>';
              }

              echo "</div>
              ";
         

            echo "</div></div></div>";

            echo "<script>
            
              document.getElementById('criticas').style.visibility = 'hidden'; 
              document.getElementById('verCriticas').addEventListener('click', async function(e) {
                let valor = document.getElementById('criticas').style.visibility; 
                if (valor == 'hidden') {
                  document.getElementById('criticas').style.visibility = 'visible'; 
                } else {
                  document.getElementById('criticas').style.visibility = 'hidden'; 
                }

              });

            
            </script>";



            include("./vistas/pie.php");
        }


    }