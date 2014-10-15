<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/p1.css">

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    
    <body>


<?php

$conexion_mysql = mysql_connect('localhost','root',''); 
mysql_select_db('test');  
mysql_query("SET NAMES utf8");





//Esto realmente no hace falta porque hemos añadido el atributo required en el formulario y no se pueden dejar los campos en blanco
if (ctype_alnum($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
} else {
    $usuario = "NO VALIDO";
}

if (ctype_alnum($_POST['password'])) {
    $password = $_POST['password'];
} else {
    $password = "NO VALIDO";
}







$selecciona_usuario = mysql_query("select * from usuariosalmacen where (DNI = '$usuario' &&  DNI = '$password')");

    
 
    
    if(mysql_num_rows($selecciona_usuario) > 0){

    
    header ("Location: entornoCliente.php");

}
    
    else{
        echo"<br>";
        echo"<br>";
        echo 'El usuario no existe en la base de datos';
        header ("Location: registro.php");
    
        
    }




?>
        
       

    </body>
</html>