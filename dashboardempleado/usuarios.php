<?php 
    session_start();
    $page = 'clientes';
    require "../php/conexion.php";
    $sql = mysqli_query($con, "SELECT * FROM clientes");
    require "../layouts/header-empleado.php";
    require "../layouts/navbar-empleado.php"; 
?>
    <div class="content">
        <div class="container-fluid">
            <h1>Clientes</h1>
            <div class="row">
             <?php while ($row = mysqli_fetch_array($sql)): ?>
                <div class="col-md-4">
                    <figure class="avatars" id="avatar" style="background: url(../imgs/<?= $row['imagen'] ?>) center center no-repeat;">                
                      <figcaption><?= $row['nombre']; ?></figcaption>
                    </figure>
                </div>              
              <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php include '../layouts/footer.php' ?>