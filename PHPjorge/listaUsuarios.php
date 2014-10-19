

<?php
$conexion = new mysqli('localhost', 'root', '', 'test');
$consulta = $conexion-> query ("Set names utf8");
$consulta = $conexion-> query ("SELECT * FROM usuariosalmacen ");

$n = 0;
echo '<table class="table table-striped table-bordered">';

            echo '<thead>';
                echo'<tr>';
                echo'<th>DNI</th>';
                echo'<th>NOMBRE</th>';
                echo'<th>APELLIDOS</th>';
                echo'<th>#</th>';
                echo'</tr>';
            echo'</thead>';
              
while ($fila = $consulta->fetch_assoc()) {
  echo '<tr>'; 
    echo '<td>'.$fila["DNI"].'</td>';
    echo '<td>'.$fila["nombre"].'</td>';
    echo '<td>'.$fila["apellidos"].'</td>';
    echo '<td><button class="btn btn-mini btn-primary" id="b'.$n.'" ><i class="icon-chevron-left icon-white"></i></button></td>';
  echo '</tr>';
  $n++;
    }       
echo '</table>';
?>