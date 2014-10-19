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
        ?>
        <div id="contenedor" class="container">
            
            
            <div class="row-fluid">               
                <div class="span6 divGrupo" style="height: 400px;">
                    <form method="POST">
                    <legend>ARTÍCULOS</legend>
                    <div class="row-fluid">
                        <div class="span6"><input name="id" class="input-small" type="text" placeholder="Introduzca ID Producto" style="width:200px;"></div>
                        <div class="span6"><button id="b1" type="submit" class="btn btn-success btn-block"><i class="icon-search icon-white"></i></button></div> 
                    </div>
                    </form>  
                        <div class="table tamañoLetraTabla table-condensed"id="tablaArticulos" ></div>
                        <div class="table tamañoLetraTabla table-condensed"id="tablaArticulos2" >
                            <?php                           
                            require './PHPjorge/busquedaArticulo.php';
                            ?>
                            
                            
                        </div>
                </div>
                    
                <div class="span6 divGrupo" style="height: 400px;">
                    <form method="POST">
                    <legend>CLIENTES</legend>
                    <div class="row-fluid">                  
                        <div class="span6"><input  name="dni" class="input-small" type="text" placeholder="Introduzca DNI" style="width:200px;"></div>
                        <div class="span6"><button id="b2" type="submit" class="btn btn-success btn-block"><i class="icon-search icon-white"></i></button></div>
                    </div>
                    </form> 
                        <div class="table tamañoLetraTabla table-condensed"id="tablaUsuarios" ></div>                            
                        <div class="table tamañoLetraTabla table-condensed"id="tablaUsuarios2" >
                            <?php                           
                            require './PHPjorge/busquedaUsuario.php';
                            ?>
                        </div>                            
                </div>
           </div> 
            
            <div class="row-fluid divGrupo" id="reservar">

            </div>
            
            <div class="row-fluid divGrupo" style="height: 500px;">
                    <form method="POST">
                    <legend>RESERVAS</legend>
                    <div class="row-fluid">                  
                        <div class="row-fluid">
                            <input  name="res" class="input-small" type="text" placeholder="ID reserva" style="width:150px;">
                            <input  name="art" class="input-small" type="text" placeholder="ID articulo" style="width:150px;">
                            <input  name="usu" class="input-small" type="text" placeholder="DNI usuario" style="width:150px;">
                            <input  name="fre" class="input-small" type="text" placeholder="Fecha reserva" style="width:150px;">
                            <input  name="fde" class="input-small" type="text" placeholder="Fecha devolución" style="width:150px;">
                        </div>
                        <div class="row-fluid"><button id="b2" type="submit" class="btn btn-success btn-block"><i class="icon-search icon-white"></i></button></div>
                    </div>
                    </form>
                
                       <div class="table tamañoLetraTabla table-condensed"id="tablaReserva2" >
                            <?php                           
                            require './PHPjorge/busquedaPrestamo.php';
                            ?>
                       </div>   
               
                <div class="row-fluid"id="tablaReservas"></div>
             </div> 
            
            
        </div>
        
        <script>
            $(document).ready(function(){
              $('#tablaArticulos').load("./PHPjorge/listaArticulos.php");  
              $('#tablaUsuarios').load("./PHPjorge/listaUsuarios.php");  
              $('#tablaReservas').load("./PHPjorge/listaPrestamos.php"); 
              $('#reservar').load("insercionPrestamo.php");       
            });
        </script>
        
    </body>
</html>