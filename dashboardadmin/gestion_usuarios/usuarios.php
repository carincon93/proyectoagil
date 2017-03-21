<?php 
    $page = 'gestionar_usuarios';
    require "../../layouts/conexion.php";
    $query = mysqli_query($con, "SELECT * FROM registro_tbl");
    require "../../layouts/header.php";
    require "../../layouts/navbar.php"; 
?>
    <div class="content">
        <div class="container-fluid">
            <h1>Gestionar usuarios</h1>
            <hr>
            <a class="fa fa-plus btn btn-success ar" href="adicionar_usuario.php"></a>
            <div class="table-fluid">
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
                            <a class='fa fa-search btn btn-info btn-actions' href='consultar_usuario.php?id=<?= $row['id_registro'] ?>'></a>
                            <a class='fa fa-pencil btn btn-primary btn-actions' href='editar_usuario.php?id=<?= $row['id_registro'] ?>'></a>
                            <a class='fa fa-trash btn btn-danger btn-actions' href='eliminar_usuario.php?id=<?= $row['id_registro'] ?>' onclick="return confirm('Seguro que quieres eliminar este usuario?')"></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
<?php include '../../layouts/footer.php' ?>