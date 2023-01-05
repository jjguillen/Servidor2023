<?php

    class VistaPartidas {

        public static function render($partidas) {
            include "cabecera.php";
            
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead class='table-primary' >";
            echo "<tr>";
            echo "<th scope='col'>Fecha</th>";
            echo "<th scope='col'>Hora</th>";
            echo "<th scope='col'>Ciudad</th>";
            echo "<th scope='col'>Lugar</th>";
            echo "<th scope='col'>Está cubierto</th>";
            echo "<th scope='col'>Estado</th>";
            echo "<th scope='col'>Jugadores</th>";
    
            echo "<th scope='col'>Acciones</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";   

            foreach($partidas as $partida) {
                echo "<tr>";
                echo "<td>{$partida->getFecha()}</td>";
                echo "<td>{$partida->getHora()}</td>";
                echo "<td>{$partida->getCiudad()}</td>";
                echo "<td>{$partida->getLugar()}</td>";
                if ($partida->getCubierto() == 0) {
                    echo "<td>No</td>";
                } else {
                    echo "<td>Si</td>";
                }
                
                if (strtolower($partida->getEstado()) == "abierta") {
                    echo "<td class='text-success'>{$partida->getEstado()}</td>";
                }

                if (strtolower($partida->getEstado()) == "cerrada") {
                    echo "<td class='text-danger'>{$partida->getEstado()}</td>";
                }

                echo "<td class='text-danger'>".count($partida->getJugadores())."</td>";
                
                echo "<td>";                
                echo " <a href='' accion='borrarP' valor='{$partida->getId()}' class='me-3'>";
                echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                        <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                     </svg>";
                echo "</a>";

                echo "<a href='' accion='verP' valor='{$partida->getId()}' class='me-3'>";
                echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-info-square' viewBox='0 0 16 16'>
                        <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
                        <path d='m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/>
                    </svg>";
                echo "</a>";

                echo "</a></td>";
                echo "</tr>";
            }

            echo "</tbody></table>";
            include "pie.php";
        }

        public static function renderAjax($partidas) {
         
            echo "<table class='table table-bordered table-striped'>";
            echo "<thead class='table-primary' >";
            echo "<tr>";
            echo "<th scope='col'>Fecha</th>";
            echo "<th scope='col'>Hora</th>";
            echo "<th scope='col'>Ciudad</th>";
            echo "<th scope='col'>Lugar</th>";
            echo "<th scope='col'>Está cubierto</th>";
            echo "<th scope='col'>Estado</th>";
            echo "<th scope='col'>Jugadores</th>";
    
            echo "<th scope='col'>Acciones</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";   

            foreach($partidas as $partida) {
                echo "<tr>";
                echo "<td>{$partida->getFecha()}</td>";
                echo "<td>{$partida->getHora()}</td>";
                echo "<td>{$partida->getCiudad()}</td>";
                echo "<td>{$partida->getLugar()}</td>";
                if ($partida->getCubierto() == 0) {
                    echo "<td>No</td>";
                } else {
                    echo "<td>Si</td>";
                }
                
                if (strtolower($partida->getEstado()) == "abierta") {
                    echo "<td class='text-success'>{$partida->getEstado()}</td>";
                }

                if (strtolower($partida->getEstado()) == "cerrada") {
                    echo "<td class='text-danger'>{$partida->getEstado()}</td>";
                }

                echo "<td class='text-danger'>".count($partida->getJugadores())."</td>";
                
                echo "<td>";                
                echo " <a href='' accion='borrarP' valor='{$partida->getId()}' class='me-3'>";
                echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                        <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                     </svg>";
                echo "</a>";

                echo "<a href='' accion='verP' valor='{$partida->getId()}' class='me-3'>";
                echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-info-square' viewBox='0 0 16 16'>
                        <path d='M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z'/>
                        <path d='m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z'/>
                    </svg>";
                echo "</a>";

                echo "</a></td>";
                echo "</tr>";
            }

            echo "</tbody></table>";
        }


        public static function renderPartidaAjax($partida) {

            $cubierto = "No";
            if ($partida->getCubierto() == 1) 
                $cubierto = "Sí";

            echo "<div class='row'>";
            echo "<div class='col-3'>";

            echo "
                <div class='card border-warning mb-3' style='max-width: 22rem;'>
                <div class='card-header text-primary'><h5 class='card-title'>Partida {$partida->getId()}</h5></div>
                <div class='card-body'>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'><span class='fw-semibold'>Fecha:</span> {$partida->getFecha()}</li>
                    <li class='list-group-item'><span class='fw-semibold'>Hora:</span> {$partida->getHora()}</li>
                    <li class='list-group-item'><span class='fw-semibold'>Ciuidad:</span> {$partida->getCiudad()}</li>
                    <li class='list-group-item'><span class='fw-semibold'>Lugar:</span> {$partida->getLugar()}</li>
                    <li class='list-group-item'><span class='fw-semibold'>Cubierto:</span> {$cubierto}</li>
                    <li class='list-group-item'><span class='fw-semibold'>Estado:</span> {$partida->getEstado()}</li>
                </ul>
                </div>
            </div>
            ";

            echo "</div>";

            echo "<div class='col-9'>";

            echo "
                <div class='card border-warning mb-3' style='max-width: 40rem;'>
                <div class='card-header text-primary'><h5 class='card-title'>Jugadores inscritos:</h5></div>
                <div class='card-body'>
                <ul class='list-group list-group-flush'>";

            $cont = 0;
            foreach($partida->getJugadores() as $jugador) {
                $cont++;
                echo "<li class='list-group-item'><span class='fw-semibold me-2'>Jugador{$cont}:</span>
                 {$jugador->getNombre()} ({$jugador->getApodo()}) -> Nivel {$jugador->getNivel()} </li>";
            }

            echo "
                </ul>
                </div>
            </div>
            ";

            if ($cont <= 3) {
                $usuario = unserialize($_SESSION['usuario']);
                echo "<p class='ms-2 text-secondary fw-semibold'>Apúntate: &nbsp;&nbsp;
                    <a href='' accion='inscribirse' partida='{$partida->getId()}' jugador='{$usuario->getId()}'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-add' viewBox='0 0 16 16'>
                            <path d='M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z'/>
                            <path d='M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z'/>
                        </svg>
                    </a></p>";
            }

            echo "</div>";


            echo "</div>";

        }

    }




?>