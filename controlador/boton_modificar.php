<?php

    if (!empty($_POST["btnregistrar"])) {
        if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["cedula"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])) {
            $id = $_GET["id"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $cedula = $_POST["cedula"];
            $fecha = $_POST["fecha"];
            $correo = $_POST["correo"];

            $sql = $conexion->query("update users set Nombre='$nombre', apellido='$apellido', ci=$cedula, fecha_nac='$fecha', correo='$correo' where id_users = $id");
            if ($sql==1) {
                header("location:index.php");
            } else {
                echo '<div class="alert alert-danger"> Error al cambiar el producto</div>';
            }
            
        }else{
            echo '<div class="alert alert-warning"> Por favor rellena todos los campos</div>';
        }
    }

?>