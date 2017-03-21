<?php 
    $page = 'gestionar_empleados';
    require "../../layouts/conexion.php"; 
    $query = mysqli_query($con, "SELECT * FROM gestion_empleados_tbl");
    include '../../layouts/header.php';
    require "../../layouts/navbar.php"; 
?>
    <div class="content">
        <div class="container-fluid">
        <h1>Gestionar empleados</h1>
        <hr>
        <a class="fa fa-plus btn btn-success ar" href="adicionar_empleado.php"></a>
            <div class="table-fluid">
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
                            <a class='fa fa-search btn btn-info btn-actions' href='consultar_empleado.php?id=<?= $row['id_empleados'] ?>'></a>
                            <a class='fa fa-pencil btn btn-primary btn-actions' href='editar_empleado.php?id=<?= $row['id_empleados'] ?>'></a>
                            <a class='fa fa-trash btn btn-danger btn-actions' href='eliminar_empleado.php?id=<?= $row['id_empleados'] ?>' onclick="return confirm('Seguro que quieres eliminar este empleado?')"></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
<?php include '../../layouts/footer.php' ?>