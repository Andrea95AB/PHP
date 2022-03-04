<?php
    include("conexion_BD.php");
    $conn=mysqli_connect($servidor, $usuario, $clave, $base_datos) or die ("no se ha podido conectar");
    echo ("La conexion se ha realizado bien");

    if (isset ($_GET['nombre'])) {

        $insertar="insert into clientes (Nombre) values ('".$_GET['nombre']."');";
        $resulado=mysqli_query ($conn, $insertar) or die ("Se fue al carajo"); 
    }
        else 
            echo "No se ha especificado un nombre";

?>