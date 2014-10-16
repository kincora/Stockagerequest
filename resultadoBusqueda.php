<?php

include('camposBusqueda.php');

///// ESTABLECEMOS CONEXIÓN ////////////////////////////////////////////////////

$conexion = new mysqli('localhost', 'root', '', 'test');
$consulta = $conexion-> query ("Set names utf8");


///////// GUARDAR TEXTO INTRODUCIDO EN VARIABLES ///////////////////////////////
if (ctype_alnum($_POST['d'])) {
$dni = $_POST['d'];}

if (ctype_alnum($_POST['n'])) {
$nombre = $_POST['n'];}

if (ctype_alnum($_POST['a'])) {
$apellido = $_POST['a'];}

/////// CREAMOS LAS QUERYS ////////////////////////////////////////////////////

$selecciona_usuario_dni     = $conexion ->query("select * from usuariosalmacen where (DNI = '$dni')");
$selecciona_usuario_nombre  = $conexion ->query("select * from usuariosalmacen where (nombre = '$nombre')");
$selecciona_usuario_apelido = $conexion ->query("select * from usuariosalmacen where (apellidos = '$apellido')");

////// CREAMOS TABLA /////////////////////////////////////////////////////////

echo '<table class="table table-striped table-bordered">';

            echo '<thead>';
                echo'<tr>';
                echo'<th>DNI</th>';
                echo'<th>NOMBRE</th>';
                echo'<th>APELLIDO</th>';
                echo'<th>#</th>';
                echo'</tr>';
            echo'</thead>';
              
while ($fila = $selecciona_usuario_dni ->fetch_assoc()) {
  echo '<tr>'; 
    echo '<td>'.$fila["DNI"].'</td>';
    echo '<td>'.$fila["nombre"].'</td>';
    echo '<td>'.$fila["apellidos"].'</td>';
    echo '<td><button class="btn btn-mini btn-primary">Seleccionar</button></td>';
  echo '</tr>';  
    }
    
    while ($fila = $selecciona_usuario_nombre ->fetch_assoc()) {
  echo '<tr>'; 
    echo '<td>'.$fila["DNI"].'</td>';
    echo '<td>'.$fila["nombre"].'</td>';
    echo '<td>'.$fila["apellidos"].'</td>';
    echo '<td><button class="btn btn-mini btn-primary">Seleccionar</button></td>';
  echo '</tr>';  
    }
    while ($fila = $selecciona_usuario_apelido ->fetch_assoc()) {
  echo '<tr>'; 
    echo '<td>'.$fila["DNI"].'</td>';
    echo '<td>'.$fila["nombre"].'</td>';
    echo '<td>'.$fila["apellidos"].'</td>';
    echo '<td><button class="btn btn-mini btn-primary">Seleccionar</button></td>';
  echo '</tr>';  
    }
       
echo '</table>';

?> 


