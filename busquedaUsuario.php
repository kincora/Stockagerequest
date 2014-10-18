<?php

///// ESTABLECEMOS CONEXIÓN ////////////////////////////////////////////////////

$conexion = new mysqli('localhost', 'root', '', 'test');
$consulta = $conexion-> query ("Set names utf8");


///////// GUARDAR TEXTO INTRODUCIDO EN VARIABLES ///////////////////////////////

if (isset($_POST['dni'])) {
    $d = $_POST['dni'];
} else {
    $d = "";
}

/////// CREAMOS LAS QUERYS ////////////////////////////////////////////////////
$usuario = $conexion ->query("select * from usuariosalmacen where (DNI = '$d')");
///////////////////////////////////////////////////////////////////////////////////
echo '<table class="table table-striped table-bordered tamañoLetraTabla table-condensed">';

if($usuario){
            echo '<thead>';
                echo'<tr>';
                echo'<th>DNI</th>';
                echo'<th>NOMBRE</th>';
                echo'<th>APELLIDOS</th>';
                echo'<th>#</th>';
                echo'</tr>';
            echo'</thead>';         

  while ($fila = $usuario->fetch_assoc()){
  echo '<tr>';
    echo '<td>'.$fila["DNI"].'</td>';
    echo '<td>'.$fila["nombre"].'</td>';
    echo '<td>'.$fila["apellidos"].'</td>';
    echo '<td><button class="btn btn-mini btn-primary><i class="icon-chevron-left icon-white"></i></button></td>';
  echo '</tr>';  
    }     
}             
echo '</table>';
?>