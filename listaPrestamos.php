<?php



$conexion = new mysqli('localhost', 'root', '', 'test');
$consulta = $conexion-> query ("Set names utf8");
$consulta = $conexion-> query ("SELECT * FROM prestamo ");

echo '<table class="table table-striped table-bordered">';

            echo '<thead>';
                echo'<tr>';
                echo'<th>ID PRESTAMO</th>';
                echo'<th>ARTÍCULO</th>';
                echo'<th>USUARIO</th>';
                echo'<th>FECHA RESERVA</th>';
                echo'<th>FECHA DEVOLUCIÓ</th>';
                echo'</tr>';
            echo'</thead>';
              
while ($fila = $consulta->fetch_assoc()) {
  echo '<tr>'; 
    echo '<td>'.$fila["Id_Prestamo"].'</td>';
    echo '<td>'.$fila["Articulo"].'</td>';
    echo '<td>'.$fila["Usuario"].'</td>';
    echo '<td>'.$fila["Fecha_Reserva"].'</td>';
    echo '<td>'.$fila["Fecha_Devolucion"].'</td>';
  echo '</tr>';  
    }
       
echo '</table>';



?>
