<?php 
	$page = "catalogo"; 
	session_start();
	$base_url="http://localhost/proyectoagil";
	include '../layouts/conexion.php';
	$query = mysqli_query($con, "SELECT * FROM gestion_vehiculos_tbl");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/master.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/owl.carousel.min.css">
  </head>
  <body>
    <div class="container-page">	
	<?php include '../layouts/navbar-user.php'; ?>
	<div class="content">
		<div class="container-fluid">
			<h1>Nuestro Cátalogo</h1>
			<ul class="row justify-content-around">
				<?php while($row = mysqli_fetch_array($query)): ?>
                <li class="col-md-4 vehicle-card-user">
                    <div>
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
                            <button><a href="mazda-user.php" class="icon-search">Cotizar vehículo</a></button>
                        <?php endif; ?>
                        <?php if ($row['marca'] == 'ford'): ?>
                            <button><a href="ford-user.php" class="icon-search">Cotizar vehículo</a></button>
                        <?php endif; ?>
                        <?php if ($row['marca'] == 'volkswagen'): ?>
                            <button><a href="volkswagen-user.php" class="icon-search">Cotizar vehículo</a></button>
                        <?php endif; ?>
                        </div>
                    </div>
                </li>
            	<?php endwhile; ?>
            </ul>
        </div>
	</div>
<?php require "../layouts/footer.php"; ?> 