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
                
                <div class="span7" id="contenedorTablas">
                    <div class="table tamañoLetraTabla table-condensed"id="tablaCliente" >                        
                    </div>
                </div>
                
                <div class="span5 divGrupo" style="height: 200px;"> 

                    <form class="form" action="camposBusqueda.php" method="post">
                            <input name="dni" type="text" placeholder="Introduzca DNI" style="width:200px;"/>
                            <button type="submit" class="btn" id="b1">Insertar</button> 
                    </form>

                </div>
           </div>
            
                <div class="row-fluid divGrupo" id="divUsuario"></div> 
                
        </div>
        
        <script>
            $(document).ready(function(){
            $('#tablaCliente').load("listaArticulos.php");
            
            $('#b1').on('click',function(){
                 $('#divUsuario').load("camposBusqueda.php");   
              });              
            });
        </script>
        
    </body>
</html>
