<?php

    class VistaSeries {

        public static function mostrarSeriesAPI($pagina) {


            include "cabecera.php";            

            echo "<div class='container'>";

            echo "<div class='row'>";

            $key = "api_key=a74c122b22807a76b7637ac1407a045e";

            //$uri = "https://api.themoviedb.org/3/genre/tv/list?language=es&".$key;       
            $uri = "https://api.themoviedb.org/3/discover/tv?page=".$pagina."&".$key;       
            
            $resultado = file_get_contents($uri, false);

            $totalPaginas=0;
            //Pasar de json a objeto php y recorrer los resultados
            if ($resultado != false) {
                $respPHP = json_decode($resultado);

                $totalPaginas = $respPHP->total_pages;
                foreach($respPHP->results as $serie) {

                  echo "
                    <div class='card' style='width: 18rem;'>
                    <img src='http://image.tmdb.org/t/p/w500/". $serie->poster_path ."' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h5 class='card-title'>".$serie->name."</h5>                      
                      <a href='enrutador.php?accion=mostrarDetalle&id=".$serie->id."' class='btn btn-primary'>Detalles</a>
                    </div>
                  </div>
                  ";
                }
            }

            echo "</div>";

            echo "<a href='enrutador.php?accion=mostrarSeriesPagina&pagina=".(1)."'>|<</a>";

            echo "&nbsp;";

            if ($pagina > 1) {
                echo "<a href='enrutador.php?accion=mostrarSeriesPagina&pagina=".($pagina-1)."'><</a>";
            } else {
                echo "<a class='btn disabled' href='enrutador.php?accion=mostrarSeriesPagina&pagina=".($pagina-1)."'><</a>";
            }

            echo "&nbsp;";
            
            if ($pagina < 500) {
                echo "<a href='enrutador.php?accion=mostrarSeriesPagina&pagina=".($pagina+1)."'>></a>";
            } else {
                echo "<a class='btn disabled' href='enrutador.php?accion=mostrarSeriesPagina&pagina=".($pagina+1)."'>></a>";
            }

            echo "&nbsp;";

            echo "<a href='enrutador.php?accion=mostrarSeriesPagina&pagina=".(500)."'>>|</a>";

            echo "<div class='row mt-5'></div>";
            echo "</div>";

          
            include "pie.php";
        }


        public static function mostrarSerieAPI($id) {

            include "cabecera.php";            

            echo "<div class='container'>";

            echo "<div class='row'>";

            $key = "api_key=a74c122b22807a76b7637ac1407a045e";

            $uri = "https://api.themoviedb.org/3/tv/".$id."?language=es&".$key;
            
            $resultado = file_get_contents($uri, false);

            //Pasar de json a objeto php y recorrer los resultados
            if ($resultado != false) {
                $respPHP = json_decode($resultado);

                $directores = "";
                foreach($respPHP->created_by as $director) {
                    $directores .= $director->name . " ";
                }

                $generos = "";
                foreach($respPHP->genres as $genero) {
                    $generos .= $genero->name . " ";
                }

                //Sacar la nota de la serie de MongoDB
                $nota = "-";

                echo "
                <div class='card mb-3' style='max-width: 540px;'>
                    <div class='row g-0'>
                        <div class='col-md-4'>
                        <img src='http://image.tmdb.org/t/p/w500/".$respPHP->poster_path."' class='img-fluid rounded-start' alt='...'>
                        </div>
                        <div class='col-md-8'>
                        <div class='card-body'>
                            <h5 class='card-title'>".$respPHP->name."</h5>
                            <p class='card-text'>".$respPHP->overview."</p>
                            <p class='card-text'>Directores: ".$directores."</p>                            
                            <p class='card-text'>Géneros: ".$generos."</p>
                            <p class='card-text'><small class='text-muted'>Número de episodios: ".$respPHP->number_of_episodes."</small></p>
                            <p class='card-text'><small class='text-muted'>Número de temporadas: ".$respPHP->number_of_seasons."</small></p>
                            <p class='card-text'><small class='text-primary'>Mi nota: ".$nota."</small></p>
                            <p class='card-text'>
                            <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalVoto'>
                            Votar
                            </button>
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                ";

                echo "
                    <!-- MODALES -->
                    <div class='modal fade' id='modalVoto' tabindex='-1'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title'>Vota por la serie</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            <form action='enrutador.php' method='post' id='formVotar'>
                                <input type='hidden' name='id' value='".$id."'>
                                <input type='hidden' name='accion' value='votar'>
                                <input type='text' name='valor' id=''>
                            </form>
                        </div>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                            <button type='submit' form='formVotar' class='btn btn-primary' >Votar</button>
                        </div>
                        </div>
                    </div>
                    </div> 
                ";

            }

            //Vídeos
            $uri = "https://api.themoviedb.org/3/tv/".$id."/videos?language=en&".$key;
            
            $resultado = file_get_contents($uri, false);

            //Pasar de json a objeto php y recorrer los resultados
            if ($resultado != false) {
                $respPHP = json_decode($resultado);

                $video = $respPHP->results[0];
                if ($video != null) {
                    $id = $video->key;

                    echo "
                    <div class='card mb-3' style='max-width: 540px;'>
                        <div class='row g-0'>
                            
                        <iframe width='560' height='315' src='https://www.youtube.com/embed/".$id."' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>

                        </div>
                        </div>
                    ";


                }
            }




            include "pie.php";

        }

    }




?>