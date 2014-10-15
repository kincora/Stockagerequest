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
        // put your code here
        ?>
        
        <div id="contenedor" class="container">
            <div class="row-fluid" id="cabecera"><p style="float: right">
                    <a href="administradorIndex.php">Administrador</a> || 
                    <a href="index.php">Cliente</p></a></div>
            <div class="row-fluid">
                
                <div class="span6" id="titulo"><h1>mePrestas...?</h1></div>
                <div class="span6" id="formulario"> 
                    <form class="form" action="accesoAdministrador.php" method="post">       
                        <h2>logueate Administrador!</h2>
                        <input type="text" class="form-control" name="usuario" placeholder="Introduzca su DNI" required="" autofocus="" />
                        <input type="password" class="form-control" name="password" placeholder="Introduzca su contraseña" required=""/>      
                        <label class="checkbox">
                            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                        </label>
                        <button class="btn btn-lg btn-primary centrado" type="submit">Login</button>   
                    </form>
                </div>
            </div>
        </div>
        </div>
        
    </body>
</html>