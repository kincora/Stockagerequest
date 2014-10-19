<?php

///// ESTABLECEMOS CONEXIÓN ////////////////////////////////////////////////////

$conexion = new mysqli('localhost', 'root', '', 'test');
$consulta = $conexion-> query ("Set names utf8");


///////// GUARDAR TEXTO INTRODUCIDO EN VARIABLES ///////////////////////////////

if (isset($_POST['res'])) {
    $r = $_POST['res'];
} else {
    $r = "";
} 
//if (isset($_POST['art'])) {
//    $a = $_POST['art'];
//} else {
//    $a = "";
//}
//if (isset($_POST['usu'])) {
//    $u = $_POST['usu'];
//} else {
//    $u = "";
//}
//if (isset($_POST['fre'])) {
//    $fe = $_POST['fre'];
//} else {
//    $fe = "";
//}
//if (isset($_POST['fde'])) {
//    $fd = $_POST['fde'];
//} else {
//    $fd = "";
//}


/////// CREAMOS LAS QUERYS ////////////////////////////////////////////////////
$prestamo = $conexion ->query("select * from prestamo where (Id_Prestamo = '$r')");
//$prestamo = $conexion ->query("select * from prestamo where (Articulo = '$a')");
//$prestamo = $conexion ->query("select * from prestamo where (Usuario = '$u')");
//$prestamo = $conexion ->query("select * from prestamo where (Fecha_Reserva = '$fe')");
//$prestamo = $conexion ->query("select * from prestamo where (Fecha_Devolucion = '$fd')");
///////////////////////////////////////////////////////////////////////////////////
echo '<table class="table table-striped table-bordered tamañoLetraTabla table-condensed">';

if($prestamo){
            echo '<thead>';
                echo'<tr>';
                echo'<th>ID</th>';
                echo'<th>PRODUCTO</th>';
                echo'<th>CLIENTE</th>';
                echo'<th>FECHA RESERVA</th>';
                echo'<th>FECHA DEVOLUCIÓN</th>';
                echo'</tr>';
            echo'</thead>';         

  while ($fila = $prestamo->fetch_assoc()){
  echo '<tr>';
    echo '<td>'.$fila["Id_Prestamo"].'</td>';
    echo '<td>'.$fila["Articulo"].'</td>';
    echo '<td>'.$fila["Usuario"].'</td>';
    echo '<td>'.$fila["Fecha_Reserva"].'</td>';
    echo '<td>'.$fila["Fecha_Devolucion"].'</td>';
  echo '</tr>';  
    }     
}             
echo '</table>';
?>