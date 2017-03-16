<?php include 'layouts/conexion.php' ?>
<?php $base_url="http://localhost/proyectoagil"; ?>
<?php $query = mysqli_query($con, "SELECT * FROM gestion_vehiculos_tbl"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/master.css">
  </head>
  <body>
	<div class="index-content hero-index">
		<div class="overlay">
			<nav class="link-vehiculos">
				<ul>
					<li>
						<a href="#catalogo">Ver vehículos</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="buttons-container">
			<button class="button-index"><a href="login.php">Login</a></button>
			<button class="button-index"><a href="registro.php">Registrarse</a></button>
		</div>		
	</div>
	<div id="catalogo" class="logos container">
		<div class="row">
			<figure></figure>
			<figure></figure>
			<figure></figure>
		</div>						
	</div>
	<div class="container">
		<div class="row">
			<ul>
				<?php while($row = mysqli_fetch_array($query)): ?>
                <li class="col-md-4 offset-md-1 col-sm-6 offset-sm-3 col-10 offset-1 vehicle-card">
                    <div>
                        <div class="card-title">
                            <h1 class="marca-title"><?= $row['marca'] ?></h1>
                            <h2 class="modelo-title"><?= $row['linea'] ?></h2>
                        </div>
                        <figure class="car1 img-container"></figure>
                        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.</p>
                        <div class="actions">
                            <button type="button" class="btn btn-primary icon-cart" data-toggle="modal" data-target="#myModal"></button>
                            <button><a href="gestion_vehiculos/consultar_vehiculo.php?id=1" class="icon-search"></a></button>
                        </div>
                    </div>
                </li>
            	<?php endwhile; ?>
            </ul>
		</div>
	</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?php echo $base_url; ?>/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
  </body>
</html>