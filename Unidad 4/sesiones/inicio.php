<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
</head>
<body>
    <h1>Inicio</h1>
    <form action="iniciar.php" method="post">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </p>
        <p>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido">
        </p>
        <input type="submit" value="Iniciar sesión">
    </form>
    <!-- <a href="iniciar.php">Iniciar sesión</a> -->
</body>
</html>