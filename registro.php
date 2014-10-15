<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/p1.css">

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <?php
        // put your code here
        ?>
        
        NO ERES USUARIO REGISTRADO, REGISTRATE O INTÉNTALO DE NUEVO.
        <a href="index.php"><input type="submit" value="VOLVER" /></a>
        
        <div class="container-fluid">
            
            <div class="row">
                
                
                <div class="span4">
                     <form action="acceso.php" method="post" >  
                        <fieldset>  
                            
                                <h1>Registrate aquí</h1>
                                
                                <img src="img/logo.png" width="50" height="50">
                                
                                <div class="row-fluid">
                                    <div class="span3"><p>Nombre:</p></div>
                                    <div class="span9"><input name="nombre" type="text" placeholder="Introduzca su nombre"/></div>
                                </div>
                                
                                 <div class="row-fluid">
                                    <div class="span3"><p>Apellido:</p></div>
                                    <div class="span9"><input name="apellido" type="text" placeholder="Introduzca sus apellidos"/></div>
                                </div>
                                
                                 <div class="row-fluid">
                                    <div class="span3"><p>DNI:</p></div>
                                    <div class="span9"><input name="dni" type="text" placeholder="Introduzca su DNI"/></div>
                                </div>
                                
                                 <div class="row-fluid">
                                    <div class="span3"><p>Nombre:</p></div>
                                    <div class="span9"><input name="email" type="email" placeholder="Introduzca su email"/></div>
                                </div>
                                
                                      <div class="row-fluid">
                                    <div class="span3"><p>Sexo:</p></div>
                                    <div class="span9">
                                        <input name="hombre" type="checkbox"/>Hombre
                                        
                                         <input name="mujer" type="checkbox"/> Mujer   
                                    </div>
                                    
                                      </div>
                                
                            
                                
                                
                            
                            <input type="submit" value="Enviar" class="btn btn-primary centrado"/>

                        </fieldset>
                    </form>
                    
                </div>
                <div class="span10"></div> 
            
            
            </div>
            
            
            
            
            
            
        </div>
        <div>
          
            
            
        </div>
    </body>
</html>


