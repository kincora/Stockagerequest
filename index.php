<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        // put your code here
        ?>



        <div id="contenedor" class="container">
            <div class="row-fluid" id="cabecera">
                <a href="administradorIndex.php"><p style="float: right">Administrador</p></a>
            </div>
            <div class="row-fluid">

                <div class="span6" id="titulo"><h1>mePrestas...?</h1></div>
                <div class="span6" id="formulario"> 
                    <form class="form" action="acceso.php" method="post">       
                        <h2>logueate Cliente!</h2>
                        <input type="text" class="form-control" name="usuario" placeholder="Introduzca su DNI" required="" autofocus="" />
                        <input type="password" class="form-control" name="password" placeholder="Introduzca su contraseña" type="password" required=""/>      
                        <label class="checkbox">
                            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                        </label>
                        <button class="btn btn-lg btn-primary centrado" type="submit">Login</button>   
                    </form>
                </div>
            </div>
        </div>
    </div
</body>
</html>
