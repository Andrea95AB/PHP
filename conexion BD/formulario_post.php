<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios en PHP con POST</title>
</head>
<body>

    <form action="guarda_datos.php"method="get">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"><br>

        <label for="edad">Edad</label>
        <input type="text" name="edad"><br>

        <input type="submit" value="Enviar">

    </form>  
</body>
</html>