<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Elección de la Localidad</title>
</head>
<body>
    <?php
  include 'configBBDD.php'; //incluimos los datos de la conexion 
  $conn=mysqli_connect($servidor, $usuario, $clave, $base_datos) or die ("no se ha podido conectar");
  echo ("La conexion se ha realizado bien");
  $_GET['provincias'];
  $consulta="select l.nombre from provincias p, localidades l where p.n_provincia = l.n_provincia and p.nombre = '{$_GET['provincias']}' order by nombre;"; //consulta para los datos select
  $resultado=mysqli_query ($conn, $consulta); // resultados
  $num_filas=mysqli_num_rows ($resultado);

  if ($num_filas>0){
?>
    <form action="localidades.php">
    <label for="localidad"> ELIGE LA LOCALIDAD DESEADA</label>
    <select name="localidad ">
    <?php
           while ($fila=mysqli_fetch_assoc ($resultado))
           echo "<option value='{$fila["localidad"]}'> {$fila["localidad"]}</option>";

    ?>


</select>
<button onclick="sacar_habitantes()"> buscar localidades </button>

    <script>
          function sacar_habitantes(){
           <?php

              
            
            
            ?>


          }

  </script>

</form>

<?php

  }else{

    echo"NO HAY DATOS EN LAS TABLAS";
  }


?>
</body>
</html>