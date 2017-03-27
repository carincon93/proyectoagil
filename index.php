<?php 
    include 'php/conexion.php';
    $base_url="http://localhost/proyectoagil";
    $query = mysqli_query($con, "SELECT * FROM vehiculos");
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
    <script src="<?php echo $base_url; ?>/js/googlemaps.js"></script>
  </head>
  <body>
	<div class="index-content hero-index">
		<div class="overlay"></div>
		<div class="buttons-container">
			<a href="login.php" class="btn btn-success">Login</a>
            <a href="#catalogo" class="btn btn-success">Ver vehículos</a>
		</div>		
	</div>
	<div id="catalogo" class="logos container">
		<div class="row">
			<figure></figure>
			<figure></figure>
			<figure></figure>
		</div>						
	</div>
	<div >
		<div class="container">
            <ul class="row">
                <?php while($row = mysqli_fetch_array($query)): ?>
                <li class="col-md-4 col-sm-10 offset-sm-1">
                    <div class="vehicle-card">
                        <div class="card-title">
                            <h1 class="marca-title"><?= $row['marca'] ?></h1>
                            <h2 class="modelo-title"><?= $row['linea'] ?></h2>
                        </div>
                        <div class="img-card">
                            <img src="imgs/<?= $row['imagen'] ?>" width="100%">
                        </div>
                        <p class="card-description"><?= $row['descripcion'] ?></p>
                        <div class="actions">
                            <a href="login.php" class="button-card">Cotizar vehículo</a>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
		</div>
	</div>
    <div id="googleMap" style="width:100%;height:400px;"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACzvbJ4E9TUEi6FmtHuwn1EMKXLvGQtZw&callback=myMap"></script>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?php echo $base_url; ?>/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
  </body>
</html>