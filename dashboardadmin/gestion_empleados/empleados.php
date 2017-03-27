<?php 
    session_start();
    $page = 'gestionar_empleados';
    require "../../php/conexion.php"; 
    $sql = mysqli_query($con, "SELECT * FROM empleados");
    include '../../layouts/header.php';
    include "../../layouts/navbar.php"; 
?>
    <div class="content">
        <div class="container-fluid">
        <h1>Gestionar empleados</h1>
        <hr>
        <?php if (isset($_SESSION['action'])): ?>
        <div class="">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php if ($_SESSION['action'] == 'add'): ?>
                <strong>Aviso!</strong> El empleado se registró correctamente!
              <?php endif ?>
              <?php if ($_SESSION['action'] == 'edit'): ?>
                <strong>Aviso!</strong> El empleado se modificó correctamente!
              <?php endif ?>
              <?php if ($_SESSION['action'] == 'delete'): ?>
                <strong>Aviso!</strong> El empleado se eliminó correctamente!
              <?php endif ?>  
            </div>
        </div>
        <?php unset($_SESSION['action']); ?>
        <?php endif ?>
        <a class="fa fa-plus btn btn-success" href="adicionar_empleado.php"></a>
            <div class="table-fluid">
                <table class="table table-bordered">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>                            
                    </thead>
                    <?php while ($row = mysqli_fetch_array($sql)): ?>
                    <tr>
                        <td><?= $row['id_empleado'] ?></td>
                        <td><?= $row['nombre'] ?></td>
                        <td>
                            <a class='fa fa-search btn btn-success btn-actions' href='consultar_empleado.php?id=<?= $row['id_empleado'] ?>'></a>
                            <a class='fa fa-pencil btn btn-success btn-actions' href='editar_empleado.php?id=<?= $row['id_empleado'] ?>'></a>
                            <a class='fa fa-trash btn btn-danger btn-actions' href='eliminar_empleado.php?id=<?= $row['id_empleado'] ?>' onclick="return confirm('Seguro que quieres eliminar este empleado?')"></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
<?php include '../../layouts/footer.php' ?>