<?php $page = 'gestionar_usuarios' ?>
<?php require "../layouts/conexion.php"; ?>
<?php 
    $query = mysqli_query($con, "SELECT * FROM registro_tbl");
?>
<?php require "../layouts/header.php"; ?>
<?php require "../layouts/navbar.php"; ?>
    <div class="content">
        <div>
            <h1>Gestionar usuarios</h1>
            <hr>
            <a class="fa fa-plus btn btn-success ar" href="../registro.php"></a>
            <div>
                <table class="table table-bordered">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                        
                    </thead>
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $row['id_registro'] ?></td>
                        <td><?= $row['correo'] ?></td>
                        <td>
                            <a class='fa fa-search btn btn-info act' href='consultar_usuario.php?id=<?= $row['id_registro'] ?>'></a>
                            <a class='fa fa-pencil btn btn-primary act' href='editar_usuario.php?id=<?= $row['id_registro'] ?>'></a>
                            <a class='fa fa-trash btn btn-danger act' href='eliminar_usuario.php?id=<?= $row['id_registro'] ?>'></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
<?php include '../layouts/footer.php' ?>