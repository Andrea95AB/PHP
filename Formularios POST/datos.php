<?php 
    

        if (isset ($_POST['nombre']))
                print "El nombre es ". $_POST ['nombre'] . "<br>";


            isset ($_POST['edad']) ? print $_POST ['edad'] : "" ;

    ?>

    <br>

    <a href="formulario_post.php">Volver a la pagina principal</a>