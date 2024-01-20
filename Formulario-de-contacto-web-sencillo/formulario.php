<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Formulario -->
    <section class="formulario">
        <h2>Formulario Web</h2>
        <form method="post" action="datos.php">
            <!-- <label for="nombre">Nombre </label> -->
            <input class="etiqueta" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
            <br>
            <!-- <label for="email">Correo </label> -->
            <input class="etiqueta" type="text" id="email" name="email" placeholder="Correo" required>
            <br>
            <!-- <label for="asunto">Asunto</label> -->
            <select class="etiqueta" name="asunto" id="asunto" placeholder="Asunto" required>
                <option value="consulta">Consulta</option>
                <option value="comentario">Comentario</option>
                <option value="queja">Queja</option>                
            </select>
            <br>
            <textarea class="etiqueta" name="mensaje" id="mensaje" placeholder="Escribe tu mensaje..."></textarea>
            <br>
            <input class="etiqueta btn" type="submit" value="Mostrar">
        </form>
    </section>
    
</body>

</html>