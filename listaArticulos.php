<?php



$conexion = new mysqli('localhost', 'root', '', 'test');
$consulta = $conexion-> query ("Set names utf8");
$consulta = $conexion-> query ("SELECT * FROM articulos ");

echo '<table class="table table-striped table-bordered">';

            echo '<thead>';
                echo'<tr>';
                echo'<th>NOMBRE PRODUCTO</th>';
                echo'<th>IDENTIFICADOR</th>';
                echo'<th>NUMERO DE SERIE</th>';
                echo'<th>STOCK</th>';
                echo'<th>#</th>';
                echo'</tr>';
            echo'</thead>';
              
while ($fila = $consulta->fetch_assoc()) {
  echo '<tr>'; 
    echo '<td>'.$fila["Nombre"].'</td>';
    echo '<td>'.$fila["ID"].'</td>';
    echo '<td>'.$fila["Num_Serie"].'</td>';
    echo '<td>'.$fila["Cantidad"].'</td>';
    echo '<td><button class="btn btn-mini btn-primary">Seleccionar</button></td>';
  echo '</tr>';  
    }
       
echo '</table>';
?>

