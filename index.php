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
<body>
    <header>
        <h1>Chat Ejemplo</h1>
    </header>
    <section>
        <div id="contenedor">
            <div id="cajachat">
                <div id="datos-chat">
                    <span style="color:#9e9e9e; margin-right:10px;">User 1: </span>
                    <span>Sample text</span>
                    <span style="float:right;">10:04 am</span>
                </div>
            </div>
            <form action="index.php" method="post">
                <input type="text" name="nombre" id="" placeholder="Ingresa tu nombre"/>
                <br>
                <textarea name="mensaje" id="" placeholder="Ingresa tu mensaje"></textarea>
                <input type="submit" value="Enviar" name="btnEnviar"/>

            </form>
        </div>
    </section>
    <footer>
        mate458
        <br/>
        ©2018
    </footer>
</body>
</html>