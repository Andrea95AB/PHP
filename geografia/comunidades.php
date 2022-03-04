<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Elección de la comunidad autonoma</title>
</head>
<body>
 <?php
        include 'configBBDD.php'; //incluimos los datos de la conexion 
        $conn=mysqli_connect($servidor, $usuario, $clave, $base_datos) or die ("no se ha podido conectar");
        echo ("La conexion se ha realizado bien");
    
        $consulta="select nombre from comunidades order by nombre;"; //consulta para los datos select
        $resultado=mysqli_query ($conn, $consulta); // resultados
        $num_filas=mysqli_num_rows ($resultado);


        if ($num_filas>0){
?>    
<form action="provincias.php">
    <label for="comunidades"> ELIGE LA COMUNIDAD DESEADA</label>
    <select name="comunidades">
    <?php
           while ($fila=mysqli_fetch_assoc ($resultado))
           echo "<option value='{$fila["nombre"]}'> {$fila["nombre"]}</option>";

    ?>

</select>
<button>Buscar provincias </button>

</form>
<?php
    }
    else 
    echo("MUERTE");
?>

</body>
</html>