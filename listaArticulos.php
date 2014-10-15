<?php



$conexion = new mysqli('localhost', 'root', '', 'test');
$consulta = $conexion-> query ("Set names utf8");
$consulta = $conexion-> query ("SELECT * FROM articulos ");
$n = 0;

echo '<table class="table table-striped table-bordered">';

   echo '<thead>';
            echo'<tr>';
            echo'<th>NOMBRE PRODUCTO</th>';
            echo'<th>IDENTIFICADOR</th>';
            echo'<th>NUMERO DE SERIE</th>';
            echo'<th>STOCK</th>';
            echo'<th>CLIENTE</th>';
            echo'<th>#</th>';
            
            echo'</tr>';
        echo'</thead>';
        
       
while ($fila = $consulta->fetch_assoc()) {
  echo '<tr>'; 
    echo '<td>'.$fila["Nombre"].'</td>';
    echo '<td>'.$fila["ID"].'</td>';
    echo '<td>'.$fila["Num_Serie"].'</td>';
    echo '<td>'.$fila["Cantidad"].'</td>';
    echo '<td><select id="desple'.$n.'"></select></td>';
    
    echo '<td><button class="btn btn-primary">Reservar</button></td>';
    
  echo '</tr>';
  $n++;
    }
    
    
    
echo '</table>';
?>

        <script>
            var n = 0;
            $(document).ready(function(){  
                for(var i = 0; i<172 ; i++){
                   $('#desple'+n).load("listaUsuarios.php");   
                   n++; 
                }
                   
            });
        </script>