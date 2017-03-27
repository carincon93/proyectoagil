<?php 
    session_start();
    $page = 'gestionar_usuarios';
    require "../../php/conexion.php";
    $sql = mysqli_query($con, "SELECT * FROM clientes");
    require "../../layouts/header.php";
    require "../../layouts/navbar.php"; 
?>
    <div class="content">
        <div class="container-fluid">
            <h1>Gestionar usuarios</h1>
            <hr>
            <?php if (isset($_SESSION['action'])): ?>
            <div class="">
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?php if ($_SESSION['action'] == 'add'): ?>
                    <strong>Aviso!</strong> El cliente se registró correctamente!
                  <?php endif ?>
                  <?php if ($_SESSION['action'] == 'edit'): ?>
                    <strong>Aviso!</strong> El cliente se modificó correctamente!
                  <?php endif ?>
                  <?php if ($_SESSION['action'] == 'delete'): ?>
                    <strong>Aviso!</strong> El cliente se eliminó correctamente!
                  <?php endif ?>  
                </div>
            </div>
            <?php unset($_SESSION['action']); ?>
            <?php endif ?>
            <a class="fa fa-plus btn btn-success ar" href="adicionar_usuario.php"></a>
            <div class="row">
             <?php while ($row = mysqli_fetch_array($sql)): ?>
                <div class="col-md-4">
                    <figure class="avatars" id="avatar" style="background: url(../../imgs/<?= $row['imagen'] ?>) center center no-repeat;">                
                      <figcaption><?= $row['nombre']; ?></figcaption>
                      <div class="nav">
                        <nav class="text-center">
                          <a href="consultar_usuario.php?id=<?= $row['id_cliente'] ?>" class="btn btn-actions" data-toggle="tooltip" data-placement="top" title="Consultar">
                            <i class="fa fa-search"></i>
                          </a>
                          <a href="editar_usuario.php?id=<?= $row['id_cliente'] ?>" class="btn btn-actions" data-toggle="tooltip" data-placement="top" title="Modificar">
                            <i class="fa fa-pencil"></i>
                          </a>
                          <a href="" class="fa fa-delete" data-toggle="tooltip" data-placement="top" data-id="<?= $row['id_cliente'] ?>" title="Eliminar">
                            <i class="fa fa-trash"></i>
                          </a>
                        </nav>
                      </div>
                    </figure>
                </div>              
              <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php include '../../layouts/footer.php' ?>