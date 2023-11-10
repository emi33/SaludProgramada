<?php
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['cuil']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['name']) >= 1 && strlen($_POST['surname']) >= 1 && strlen($_POST['date']) >= 1 && strlen($_POST['pass']) >= 1) {
        $cuil = trim($_POST['cuil']);
        $email = trim($_POST['email']);
        $name = trim($_POST['name']);
        $surname = trim($_POST['surname']);
        $date = $_POST['date']; // Obtén la fecha del formulario

        // Realiza la validación de la fecha
        $fecha_validada = date('Y/m/d', strtotime($date));
        $pass = trim($_POST['pass']);

		
        $consulta = "INSERT INTO datos(cuil, email, nombre, apellido, fecHA_nac, contra) VALUES ('$cuil','$email', '$name','$surname','$fecha_validada','$pass')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            echo "¡Te has registrado correctamente!";
        } else {
            echo "Ha ocurrido un error!";
        }
    } else {
        echo "Por favor, complete los campos";
    }
}
?>