<?php 
    session_start();
    $page = "ford";
    $base_url="http://localhost/proyectoagil";
    include '../php/conexion.php';
    $sql = mysqli_query($con, "SELECT * FROM vehiculos WHERE marca = 'ford' ");
    include '../layouts/header.php';
    include '../layouts/navbar.php';
?>
    <div class="content">
        <div class="container">            
            <ul class="row">
                <?php while ($row = mysqli_fetch_array($sql)): ?>
                <li class="col-md-4 col-sm-10 offset-sm-1">
                    <div class="vehicle-card">
                        <div class="card-title">
                            <h1 class="marca-title"><?= $row['marca'] ?></h1>
                            <h2 class="modelo-title"><?= $row['linea'] ?></h2>
                        </div>
                        <div>
                            <div class="img-card">
                                <img src="../imgs/<?= $row['imagen'] ?>" width="100%">
                            </div>
                            <p class="card-description"><?= $row['descripcion'] ?></p>
                            <div class="actions">
                                <a href="gestion_vehiculos/editar_vehiculo.php?id=<?= $row['id_vehiculo'] ?>" class="button-card"><i class="fa fa-pencil"></i> Editar vehículo</a>
                            </div>
                        </div>
                    </div>                    
                </li>
                <?php endwhile ?>       
            </ul>
        </div>
    </div>
<?php include '../layouts/footer.php'; ?>