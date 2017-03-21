<?php 
    $page = "ford";
    $base_url="http://localhost/proyectoagil";
    include '../layouts/conexion.php';
    $query = mysqli_query($con, "SELECT * FROM gestion_vehiculos_tbl WHERE marca = 'ford' ");
    include '../layouts/header.php';
    include '../layouts/navbar.php';
?>
    <div class="content">
        <div>            
            <ul>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <li class="col-md-4 offset-md-1 col-sm-6 offset-sm-3 col-10 offset-1 vehicle-card">
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
                            <button><a href="gestion_vehiculos/editar_vehiculo.php?id=<?= $row['id_vehiculos'] ?>" class="btn fa fa-pencil"> Editar vehículo</a></button>
                        </div>
                    </div>
                </li>
                <?php endwhile ?>       
            </ul>
        </div>        
    </div>
<?php include '../layouts/footer.php'; ?>