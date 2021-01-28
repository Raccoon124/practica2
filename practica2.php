<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>

    <section class="contenedor formulario">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="formulario-contacto">
                <label for="">nombre: </label>
                <input type="text" name="fname" pattern="[A-Za-z ]+" required>
            </div>

            <div class="formulario-contacto">
                <label for=""> Apellido Paterno: </label>
                <input type="text" name="aPaterno" pattern="[A-Za-z ]+" required>
            </div>

            <div class="formulario-contacto">
                <label for=""> Apellido Materno:</label>
                <input type="text" name="aMaterno" pattern="[A-Za-z ]+" required>
            </div>

            <div class="formulario-contacto">
                <label for="">Email:</label>
                <input type="email" name="eMail" required>
            </div>

            <input type="submit">
        </form>
    </section>

    <section class="contenedor resultado">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //COLLECT value of input field
            $nombre = $_POST['fname'];
            if (empty($nombre)) {
                echo "Name is empty";
            } else {
                echo "Nombre:";
                echo $nombre . " <br>";
            }
            //COLLECT value of input field
            $aPaterno = $_POST['aPaterno'];
            if (empty($aPaterno)) {
                echo "Apellido esta empty";
            } else {
                echo "Apellido:";
                echo $aPaterno . " <br>";
            }

            //COLLECT value of input field
            $aMaterno = $_POST['aMaterno'];
            if (empty($aMaterno)) {

                echo "Name is empty";
            } else {
                echo "Apellido materno:";
                echo $aMaterno . " <br>";
            }

            //COLLECT value of input field
            $email = $_POST['eMail'];
            if (empty($email)) {

                echo "Name is empty";
            } else {
                echo "Correo:";
                echo $email . " ";
            }
        }

        ?>
    </section>

</body>

</html>