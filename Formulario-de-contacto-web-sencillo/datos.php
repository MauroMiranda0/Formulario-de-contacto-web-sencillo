<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
</head>
<body>
    <?php if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre = $_REQUEST["nombre"];
        $correo = $_REQUEST["email"];
        $mensaje = $_REQUEST['mensaje'];
        echo "Nombre: $nombre <br>";
        echo "Correo: $correo <br>";
        echo "Mensaje: $mensaje <br>";
    }
    ?>
</body>
</html>