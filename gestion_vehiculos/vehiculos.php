<?php $page = "gestionar_vehiculos" ?>
<?php require "../layouts/conexion.php"; ?>
<?php 
    $query = mysqli_query($con, "SELECT * FROM gestion_vehiculos_tbl");
?>
<?php include '../layouts/header.php'; ?>
<?php require "../layouts/navbar.php"; ?>
    <div class="content">
        <div>
            <h1>Gestionar vehículos</h1>
            <hr>
            <a class="fa fa-plus btn btn-success ar" href="adicionar_vehiculo.php"></a>
            <div>
                <table class="table table-bordered">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Marca</th>
                            <th>Línea</th>
                            <th>Acciones</th>
                        </tr>                            
                    </thead>
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['id_vehiculos'] ?></td>
                        <td><?= $row['marca'] ?></td>
                        <td><?= $row['linea'] ?></td>
                        <td>
                            <a class='fa fa-search btn btn-info act' href='consultar_vehiculo.php?id=<?= $row['id_vehiculos'] ?>'></a>
                            <a class='fa fa-pencil btn btn-primary act' href='editar_vehiculo.php?id=<?= $row['id_vehiculos'] ?>'></a>
                            <a class='fa fa-trash btn btn-danger act' href='eliminar_vehiculo.php?id=<?= $row['id_vehiculos'] ?>'></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
<?php include '../layouts/footer.php' ?>