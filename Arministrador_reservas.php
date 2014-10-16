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
                <div class="span7" id="contenedorTablas">
                    <div class="table tamañoLetraTabla table-condensed"id="tablaCliente" >                        
                    </div>
                </div>  
                <div class="span5 divGrupo">
                    <form class="form-search" action="camposBusqueda.php" method="post">
                        <div class="input-prepend">
                            <button type="submit" class="btn" id="b1">Buscar</button>
                            <input id="d" type="text" placeholder="Busque por DNI" class="span2 search-query" style="width:200px;">
                        </div><br>
                        <div class="input-prepend">
                            <button type="submit" class="btn" id="b2">Buscar</button>
                            <input id="d" type="text" placeholder="Busque por NOMBRE" class="span2 search-query" style="width:200px;">
                        </div><br>
                        <div class="input-prepend">
                            <button type="submit" class="btn" id="b2">Buscar</button>
                            <input id="d" type="text" placeholder="Busque por APELLIDO" class="span2 search-query" style="width:200px;">
                        </div>
                    </form
                    
                    <div class="row-fluid" id="resultadoBusqueda">
                        
                    </div>
                    
                </div>
            </div>
            
            <div class="row-fluid" id="contenedorBuscadores">
                <div class="row-fluid divGrupo">
                    
                    
                    
                    
                </div>              
            </div>
            
        </div>
     
        
        <script>
            $(document).ready(function(){
                $('#tablaCliente').load("listaArticulos.php");
                $('#camposBusqueda').load("camposBusqueda.php");
                $('#resultadoBusqueda').load("resultadoBusqueda.php");
                
                
            });
        </script>
        
    </body>
</html>
