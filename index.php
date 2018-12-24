<?php
    include "server.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <title>Chat_Ejemplo</title>
</head>
<body onload="ajax()">
    <header>
        <h1>Chat Ejemplo</h1>
    </header>
    <section>
        <div id="contenedor">
            <div id="cajachat">
            </div>
            <form action="index.php" method="post">
                <input type="text" name="nombre" id="" pattern="[A-Za-z0-9_]{2,50}" placeholder="Ingresa tu nombre"/>
                <br>
                <textarea name="mensaje" id="" placeholder="Ingresa tu mensaje"></textarea>
                <input type="submit" value="Enviar" name="btnEnviar"/>

            </form>
            <?php
                if(isset($_POST['btnEnviar'])){
                    $name = $_POST['nombre'];
                    $message = $_POST['mensaje'];
                    $sql = "INSERT INTO usuario (nombre,mensaje) VALUES('$name','$message')";
                    $query = mysqli_query($con,$sql);

                }
            ?>
        </div>
    </section>
    <footer>
        mate458
        <br/>
        ©2018
    </footer>
    <script src="app.js"></script>
</body>
</html>