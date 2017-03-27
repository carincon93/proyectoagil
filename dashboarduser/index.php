<?php 
	$page = "catalogo"; 
	include '../php/conexion.php';
	$sql = mysqli_query($con, "SELECT * FROM vehiculos");
    include '../layouts/header-user.php';
?>
	<?php include '../layouts/navbar-user.php'; ?>
	<div class="content">
		<div class="container">
			<h1>Nuestro Catálogo</h1>
			<ul class="row">
				<?php while($row = mysqli_fetch_array($sql)): ?>
                <li class="col-md-4 col-sm-10 offset-sm-1">
                    <div class="vehicle-card-user">
                        <div class="card-title">
                            <h1 class="marca-title"><?= $row['marca'] ?></h1>
                            <h2 class="modelo-title"><?= $row['linea'] ?></h2>
                        </div>
                        <div class="img-card">
                            <img src="../imgs/<?= $row['imagen'] ?>" width="100%">
                        </div>
                        <p class="card-description"><?= $row['descripcion'] ?></p>
                        <div class="actions">
                        <?php if ($row['marca'] == 'mazda'): ?>
                            <a href="mazda-user.php" class="button-card">Cotizar vehículo</a>
                        <?php endif; ?>
                        <?php if ($row['marca'] == 'ford'): ?>
                            <a href="ford-user.php" class="button-card">Cotizar vehículo</a>
                        <?php endif; ?>
                        <?php if ($row['marca'] == 'volkswagen'): ?>
                            <a href="volkswagen-user.php" class="button-card">Cotizar vehículo</a>
                        <?php endif; ?>
                        </div>
                    </div>
                </li>
            	<?php endwhile; ?>
            </ul>
        </div>
	</div>
<?php require "../layouts/footer.php"; ?> 