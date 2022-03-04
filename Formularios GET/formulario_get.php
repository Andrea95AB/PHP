<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios en PHP con GET</title>
</head>
<body>
    <!--Creacion formulario-->
    <form method="get">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"><br>

        <label for="edad">Edad</label>
        <input type="text" name="edad"><br>

        <input type="submit" value="Enviar">

    </form>

    <!--Codigo PHP-->
    <?php 
    /*Para obtener el valor del campo del formulario, debemos indicar el nombre del campo mediante un if con isset 
    y mostrar el campo con print*/

        if (isset ($_GET['nombre']))
                print $_GET ['nombre'];

            /*Podemos realizarlo tambien sin if y devolver campo vacio si no hubiera nada*/

            isset ($_GET['edad']) ? print $_GET ['edad'] : "" ;

    ?>
</body>
</html>