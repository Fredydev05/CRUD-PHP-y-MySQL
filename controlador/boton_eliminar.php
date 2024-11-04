<?php
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];

        $sql = $conexion->query(" delete from users where id_users = $id ");
        if ($sql==1) {
            echo '<div class="alert alert-success">Usuario eliminado corectamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al borrar usuario</div>';
        }
    }
    
    

?>