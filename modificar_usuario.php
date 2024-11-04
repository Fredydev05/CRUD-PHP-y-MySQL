<?php

    include "modelo/conexion.php";
    $id=$_GET["id"];
    $sql = $conexion->query(" select * from users where id_users = $id");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form class="col-4 m-auto p-4 " method="POST">
        <h3 class="text-center text-secondary alert alert-secondary">Modificar Usuario</h3>
        <input type="hidden" value="<?= $_GET["id"]?>"> 
        <?php
            include "controlador/boton_modificar.php";
            while ($datos = $sql->fetch_object()) {?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                    <input type="text" class="form-control" name="nombre" value="<?= $datos->Nombre ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">C.I. de identidad</label>
                    <input type="text" class="form-control" name="cedula" value="<?= $datos->ci ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha_nac ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="text" class="form-control" name="correo" value="<?= $datos->correo?>">
                </div>
        <?php }

        ?>
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    </form>
</body>

</html>