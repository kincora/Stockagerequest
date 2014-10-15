<?php



$conexion2 = new mysqli('localhost', 'root', '', 'test');
$consulta2 = $conexion2-> query ("Set names utf8");
$consulta2 = $conexion2-> query ("SELECT * FROM usuarios2 order by DNI");

                              while ($fila2 = $consulta2->fetch_assoc()){
                              echo '<option>'.$fila2["DNI"]." ".$fila2["nombre"]." ".$fila2["apellidos"].'</option>';} 
?>

