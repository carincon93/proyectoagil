<?php $page = 'gestionar_empleados' ?>
<?php require "../layouts/conexion.php"; ?>
<?php 
    $query = mysqli_query($con, "SELECT * FROM gestion_empleados_tbl");
?>
<?php include '../layouts/header.php'; ?>
<?php require "../layouts/navbar.php"; ?>   
    <div class="content">
        <div>
            <h1>Gestionar empleados</h1>
            <hr>
            <a class="fa fa-plus btn btn-success ar" href="adicionar_empleado.php"></a>
            <a class="btn btn-primary" href="../dashboard.php">Volver</a>
            <div>
                <table class="table table-bordered">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>                            
                    </thead>
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['id_empleados'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td>
                            <a class='fa fa-search btn btn-info act' href='consultar_empleado.php?id=<?= $row['id_empleados'] ?>'></a>
                            <a class='fa fa-pencil btn btn-primary act' href='editar_empleado.php?id=<?= $row['id_empleados'] ?>'></a>
                            <a class='fa fa-trash btn btn-danger act' href='eliminar_empleado.php?id=<?= $row['id_empleados'] ?>'></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
<?php include '../layouts/footer.php' ?>