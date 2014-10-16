<?php

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

?>
