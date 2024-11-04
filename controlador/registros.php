<?php
    if (!empty($_POST["btnregistrar"])) {
        if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["cedula"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])) {
            
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $cedula = $_POST["cedula"];
            $fecha = $_POST["fecha"];
            $correo = $_POST["correo"];

            $sql = $conexion->query(" insert into users(Nombre, apellido, ci, fecha_nac, correo) values('$nombre','$apellido','$cedula','$fecha','$correo') ");
            if ($sql==1) {
                echo '<div class="alert alert-success">Usuario registrado correctamente</div>';
            } else {
                echo '<div class="alert alert-danger">Error al registrar al usuario</div>';
            }
            

        }else{
            echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
        }
    }

?>