<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="ANSI">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaludProgramada</title>
</head>
<body class="background">
    <div class="cuadroregistro">
        <h1>Registrarse en SaludProgramada</h1>
        <img src="logo.png" alt= logo width="200" >
        <form class="formularioreg" action="registro.php" method="POST">

            <p>Ingrese su CUIL</p>
            <input type="text" name="cuil" maxlength="11" pattern="[0-9]{1,11}" placeholder="Ingrese su CUIL">
            <br><br>  

            <p>Ingrese su email</p>
            <input type="email" name="email" maxlength="100"  placeholder="Ingrese su email">
            <br><br>      

            <p>Ingrese su/s Nombre/s</p>
            <input type="text"name="name" maxlength="25" placeholder="Ingrese su Nombre">
            <br><br>

            <p>Ingrese su/s Apellido/s</p>
            <input type="text"name="surname" maxlength="25" placeholder="Ingrese su Apellido">
            <br><br>

            <p>Ingrese su Fecha de Nacimiento.</p>
            <input type="date" name="date" placeholder="dd/mm/yyyy">
            <br><br>

            <p>Ingrese su contraseña</p>
            <input type="password" name="pass" minlength="8" placeholder="Ingrese su contraseña">
            <br><br>

            <button type="submit" name="register" class="boton-estilo">Registrar</button>
        </form>
        <?php
        include ("registro.php");
        ?>
    </div>
</body>
</html>