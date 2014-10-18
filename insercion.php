
<?php

$conexion = new mysqli('localhost', 'root', '', 'test');
$consulta = $conexion-> query ("Set names utf8");


if (isset($_GET['escribirArticulo'])) {
    $id_producto = $_GET['escribirArticulo'];
} else {
    $id_producto = "ERROR";
}

if (isset($_GET['escribirDNI'])) {
   $dni = $_GET['escribirDNI']; 
} else {
   $dni = "";
}

if (isset($_GET['escribirReserva'])) {  
   $fechaReserva = $_GET['escribirReserva'];
} else {
   $fechaReserva = "";
}

if (isset($_GET['escribirDevolucion'])) {
   $fechaDevolucion = $_GET['escribirDevolucion'];
} else {
   $fechaDevolucion = "";
}
           $nuevo_registro = $conexion-> query ("INSERT INTO `test`.`prestamo` (`Articulo`, `Usuario`, `Fecha_Reserva`, `Fecha_Devolucion`) VALUES ('$id_producto', '$dni', '$fechaReserva', '$fechaDevolucion');");
?>

<html>
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">       
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen"/>
        <link rel="stylesheet" href="css/p1.css" media="screen"/>
        
       
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="row-fluid">
                <div class="span2"></div>
                <div class="span8 divGrupo">
                    <h1 class="text-center">Inserción Realizada</h1>
                    <?php 
                        $conexion = new mysqli('localhost', 'root', '', 'test');
                        $consulta = $conexion-> query ("Set names utf8");

                                if (isset($_GET['escribirArticulo'])) {
                                    $id_producto = $_GET['escribirArticulo'];
                                } else {
                                    $id_producto = "ERROR";
                                }

                                if (isset($_GET['escribirDNI'])) {
                                   $dni = $_GET['escribirDNI']; 
                                } else {
                                   $dni = "";
                                }

                                if (isset($_GET['escribirReserva'])) {  
                                   $fechaReserva = $_GET['escribirReserva'];
                                } else {
                                   $fechaReserva = "";
                                }

                                if (isset($_GET['escribirDevolucion'])) {
                                   $fechaDevolucion = $_GET['escribirDevolucion'];
                                } else {
                                   $fechaDevolucion = "";
                                }
                                
                                    echo '<table class="table table-striped table-bordered tamañoLetraTabla">';
                                            echo '<thead>';
                                                echo'<tr>';
                                                echo'<th>ARTÍCULO</th>';
                                                echo'<th>USUARIO</th>';
                                                echo'<th>FECHA RESERVA</th>';
                                                echo'<th>FECHA DEVOLUCIÓN</th>';
                                                echo'<th>#</th>';
                                                echo'</tr>';
                                            echo'</thead>';
                                            echo '<tr>'; 
                                                echo '<td>'.$id_producto.'</td>';
                                                echo '<td>'.$dni.'</td>';
                                                echo '<td>'.$fechaReserva.'</td>';
                                                echo '<td>'.$fechaDevolucion.'</td>';
                                                echo '<td><a href="Arministrador_reservas.php"><button type="button" class="btn btn-primary btn-block">Volver</button></a></td>';
                                            echo '</tr>';         
                    ?>
                    
                </div>
                <div class="span2"></div>
            </div>
        </div>
    </body>
    
    
    
</html>