
                <fieldset>
                    <legend>AÑADIR RESERVA</legend>

                        <input id="id_a" type="text" placeholder="ID ARTICULO">
                        <input id="dni" type="text" placeholder="DNI USUARIO">
                        <input id="f_r" type="text" placeholder="FECHA RESERVA">
                        <input id="f_d" type="text" placeholder="FECHA DEVOLUCIÓN">
                        
                    <button id="Insertar" class="btn btn-primary btn-block">Insertar</button>
                </fieldset>


<?php

$conexion = new mysqli('localhost', 'root', '', 'test');
$consulta = $conexion-> query ("Set names utf8");
$consulta = $conexion-> query ("SELECT * FROM prestamo ");


if (isset($_POST['id_a'])) {
    $id_producto = $_POST['id_a'];
} else {
    $id_producto = "";
}

if (isset($_POST['dni'])) {
   $dni = $_POST['dni']; 
} else {
   $dni = "";
}

if (isset($_POST['f_r'])) {
   $fechaReserva = $_POST['f_r'];
} else {
   $fechaReserva = "";
}

if (isset($_POST['f_d'])) {
   $fechaDevolucion = $_POST['f_d'];
} else {
   $fechaDevolucion = "";
}


$nuevo_registro = mysql_query("INSERT INTO `test`.`prestamo` (`Articulo`, `Usuario`, `Fecha_Reserva`, `Fecha_Devolucion`) VALUES ('$id_producto', '$dni', '$fechaReserva', '$fechaDevolucion');");
 
 
 
 
 
 
 
 ?>