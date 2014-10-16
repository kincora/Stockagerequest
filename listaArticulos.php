<?php



$conexion = new mysqli('localhost', 'root', '', 'test');
$consulta = $conexion-> query ("Set names utf8");
$consulta = $conexion-> query ("SELECT * FROM articulos ");

$n = 0;
echo '<table class="table table-striped table-bordered">';

            echo '<thead>';
                echo'<tr>';
                echo'<th>NOMBRE</th>';
                echo'<th>ID</th>';
                echo'<th>NUM.SERIE</th>';
                echo'<th>STOCK</th>';
                echo'<th>#</th>';
                echo'</tr>';
            echo'</thead>';
              
while ($fila = $consulta->fetch_assoc()) {
  echo '<tr>'; 
    echo '<td>'.$fila["Nombre"].'</td>';
    echo '<td>'.$fila["ID"].'</td>';
    echo '<td>'.$fila["Num_Serie"].'</td>';
    echo '<td>'.$fila["Cantidad"].'</td>';
    echo '<td><button class="btn btn-mini btn-primary" id="b'.$n.'" ><i class="icon-chevron-left icon-white"></i></button></td>';
  echo '</tr>';
  $n++;
    }       
echo '</table>';
?>

<!--<script>
    var n = 0;
    $(document).redy(function(){
       for(var i = 0; i<172 ; i++){
           $('#b'+n).on('click',function(){
               $()
           });   
           n++; 
                }
    });
</script>-->
