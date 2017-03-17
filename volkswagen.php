<?php $page = "volkswagen"; ?>
<?php include 'layouts/conexion.php' ?>
<?php 
    $query = mysqli_query($con, "SELECT * FROM gestion_vehiculos_tbl WHERE marca = 'volkswagen' ");
?>
<?php include 'layouts/header.php'; ?>
<?php include 'layouts/navbar.php' ?>
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
                            <img src="imgs/<?= $row['imagen'] ?>" width="100%">
                        </div>
                        <p class="card-description"><?= $row['descripcion']  ?></p>
                        <div class="actions">
                            <button type="button" class="btn btn-primary icon-cart" data-toggle="modal" data-target="#myModal"></button>
                            <button><a href="gestion_vehiculos/consultar_vehiculo.php?id=1" class="icon-search"></a></button>
                        </div>
                    </div>
                </li>
                <?php endwhile ?>                
            </ul>
        </div>        
    </div>
<?php include 'layouts/footer.php'; ?>