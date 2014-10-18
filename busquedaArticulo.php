<?php

///// ESTABLECEMOS CONEXIÓN ////////////////////////////////////////////////////

$conexion = new mysqli('localhost', 'root', '', 'test');
$consulta = $conexion-> query ("Set names utf8");


///////// GUARDAR TEXTO INTRODUCIDO EN VARIABLES ///////////////////////////////

if (isset($_POST['id'])) {
    $id = $_POST['id'];
} else {
    $id = "";
}

/////// CREAMOS LAS QUERYS ////////////////////////////////////////////////////
$usuario = $conexion ->query("select * from articulos where (ID = '$id')");
///////////////////////////////////////////////////////////////////////////////////
echo '<table class="table table-striped table-bordered tamañoLetraTabla table-condensed">';
if($usuario){
            echo '<thead>';
                echo'<tr>';
                echo'<th>ID</th>';
                echo'<th>NUM.SERIE</th>';
                echo'<th>NOMBRE</th>';
                echo'<th>#</th>';
                echo'</tr>';
            echo'</thead>';
            

  while ($fila = $usuario->fetch_assoc()){
  echo '<tr>';
    echo '<td>'.$fila["ID"].'</td>';
    echo '<td>'.$fila["Num_Serie"].'</td>';
    echo '<td>'.$fila["Nombre"].'</td>';
    echo '<td><button class="btn btn-mini btn-primary><i class="icon-chevron-left icon-white"></i></button></td>';
  echo '</tr>';  
    }     
}             
echo '</table>';
?>