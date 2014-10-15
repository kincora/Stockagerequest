<!DOCTYPE html>

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
        <?php
//        $conexion = new mysqli('localhost', 'root', '', 'test');
//        $consulta = $conexion -> query("Set names utf8");
//        $consulta = $conexion -> query("SELECT * FROM articulos"); 
        ?>
        
        <div id="contenedor" class="container">
            <div class="row-fluid centrado" id="cabecera">
                <h1>mePrestas...?</h1>
            </div>
            <div class="row-fluid">
                <div class="span12" id="contenedorTablas">
                    <div class="table"id="formularioCliente" >                        
                    </div>
                </div>           
            </div>
        </div>
     
        
        <script>
            $(document).ready(function(){
                $('#formularioCliente').load("listaArticulos.php");
            });
        </script>
        
    </body>
</html>
