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
                      <a href='#' class='btn btn-primary'>Detalles</a>
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

        public static function renderAjax($noticias) {
         
            echo "<table class='table'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col'>#</th>";
            echo "<th scope='col'>Encabezado</th>";
            echo "<th scope='col'>Texto</th>";
            echo "<th scope='col'>Fecha</th>";
            echo "<th scope='col'>Acciones</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";   

            foreach($noticias as $noticia) {
                echo "<tr>";
                echo "<th scope='row'>{$noticia->getId()}</th>";
                echo "<td>{$noticia->getEncabezado()}</td>";
                echo "<td>{$noticia->getTexto()}</td>";
                echo "<td>{$noticia->getFecha()}</td>";
                echo "<td>";
                
                echo "<button id='borrarNoticia' accion='borrarN' value='{$noticia->getId()}' class='btn btn-primary'>X</button>";
                
                //<a href='enrutador.php?accion=borrarN&id={$noticia->getId()}'>X
                
                echo "</a></td>";
                echo "</tr>";
            }

            echo "</tbody></table>";
        }


    }




?>