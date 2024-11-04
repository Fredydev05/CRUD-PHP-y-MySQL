<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c794a947dc.js" crossorigin="anonymous"></script>
    <title>PHP crud</title>
</head>

<body>
    <script>
        function eliminar(){
            var resp = confirm("Estas seguro de que deseas eliminar ese usuario? ");
            return resp;
        }
    </script>
    <h1 class="text-center p-3">CRUD PHP</h1>
    <div class="container-fluid row">
        <form class="col-4 v" method="POST">
            <h3 class="text-center text-secondary">Registro de personas con PHP</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">C.I. de identidad</label>
                <input type="text" class="form-control" name="cedula">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
            </div>
            <?php
                include "modelo/conexion.php";
                include "controlador/registros.php";
            ?>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">C.I.</th>
                        <th scope="col">FECHA DE NACIMIENTO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        $sql = $conexion->query(" select * from users");
                        while($datos = $sql->fetch_object()){ ?>
                            <tr>
                                <td><?= $datos->id_users?></td>
                                <td><?= $datos->Nombre?></td>
                                <td><?= $datos->apellido?></td>
                                <td><?= $datos->ci?></td>
                                <td><?= $datos->fecha_nac?></td>
                                <td><?= $datos->correo?></td>
                                <td>
                                    <a href="modificar_usuario.php?id=<?= $datos->id_users ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_users?> " class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                    <?php }
                    ?>

                </tbody>
                <?php
                    include "controlador/boton_eliminar.php";
                ?>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>