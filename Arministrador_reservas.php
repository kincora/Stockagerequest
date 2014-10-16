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
            
            <div class="row-fluid centrado" id="cabecera">
                <h1>Reservas...?</h1>
            </div>
            
            <div class="row-fluid">               
                <div class="span7 divGrupo" id="contenedorTablas" style="height: 250px;">
                        <div class="span6"><input name="id" class="input-small" type="text" placeholder="Introduzca ID Producto" style="width:200px;"></div>
                        <div class="span6"><button id="b1" type="submit" class="btn btn-success btn-block"><i class="icon-search icon-white"></i></button></div>
                        <div class="table tamañoLetraTabla table-condensed"id="tablaCliente" ></div>
                </div>
                    
                <div class="span5 divGrupo" style="height: 250px;"> 
                    <form class="form" action="busquedaUsuario.php" method="post">
                        <div class="span6"><input  name="dni" class="input-small" type="text" placeholder="Introduzca DNI" style="width:200px;"></div>
                        <div class="span6"><button id="b2" type="submit" class="btn btn-success btn-block"><i class="icon-search icon-white"></i></button></div>
                        <div class="row-fluid" id="divUsuario"></div>                            
                    </form>

                </div>
           </div> 
            
            <div class="row-fluid divGrupo" id="reservar"></div>
            <div class="row-fluid divGrupo"id="BBDDprestamos" ></div>
            
        </div>
        
        <script>
            $(document).ready(function(){
              $('#tablaCliente').load("listaArticulos.php");  
              $('#BBDDprestamos').load("listaPrestamos.php"); 
              
              
              $('#b1').on('click',function(){
                 var _id = $('#id').val();
                    if(_id !== ""){
                        $('#tablaCliente').load("busquedaArticulo.php",{id : _id});
                            
                        
                    }
              });
              
//              $('#b1').on('click',function(){
//                    $('#tablaCliente').load("busquedaArticulo.php");
//                });
//              
//              $('#b2').on('click',function(){
//                    $('#divUsuario').load("busquedaUsuario.php");
//                });          
            });
        </script>
        
    </body>
</html>
