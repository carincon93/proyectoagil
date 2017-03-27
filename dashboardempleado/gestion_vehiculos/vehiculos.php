<?php 
    session_start();
    $page = "gestionar_vehiculos";
    require "../../php/conexion.php";
    $sql = mysqli_query($con, "SELECT * FROM vehiculos");
    include '../../layouts/header-empleado.php';
    require "../../layouts/navbar-empleado.php"; 
?>
    <div class="content">
        <div class="container-fluid">
            <h1>Gestionar vehículos</h1>
            <hr>
            <?php if (isset($_SESSION['action'])): ?>
            <div class="">
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?php if ($_SESSION['action'] == 'add'): ?>
                    <strong>Aviso!</strong> El vehículo se registró correctamente!
                  <?php endif ?>
                  <?php if ($_SESSION['action'] == 'edit'): ?>
                    <strong>Aviso!</strong> El vehículo se modificó correctamente!
                  <?php endif ?>
                  <?php if ($_SESSION['action'] == 'delete'): ?>
                    <strong>Aviso!</strong> El vehículo se eliminó correctamente!
                  <?php endif ?>  
                </div>
            </div>
            <?php unset($_SESSION['action']); ?>
            <?php endif ?>
            <a class="fa fa-plus btn btn-success ar" href="adicionar_vehiculo.php"></a>
            <div class="table-fluid">
                <table class="table table-bordered">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Marca</th>
                            <th>Línea</th>
                            <th>Acciones</th>
                        </tr>                            
                    </thead>
                    <?php while ($row = mysqli_fetch_array($sql)): ?>
                    <tr>
                        <td><?= $row['id_vehiculo'] ?></td>
                        <td><?= $row['marca'] ?></td>
                        <td><?= $row['linea'] ?></td>
                        <td>
                            <a class='fa fa-search btn btn-info btn-actions' href='consultar_vehiculo.php?id=<?= $row['id_vehiculo'] ?>'></a>
                            <a class='fa fa-pencil btn btn-primary btn-actions' href='editar_vehiculo.php?id=<?= $row['id_vehiculo'] ?>'></a>
                            <a class='fa fa-trash btn btn-danger btn-actions' href='eliminar_vehiculo.php?id=<?= $row['id_vehiculo'] ?>' onclick="return confirm('Seguro que quieres eliminar este vehículo?')"></a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
<?php include '../../layouts/footer.php' ?>