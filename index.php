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
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/master.css">
    <script>
        function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(5.032678, -75.451303),
            zoom:5,
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>
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
			<ul class="row justify-content-around">
				<?php while($row = mysqli_fetch_array($query)): ?>
                <li class="col-md-4 vehicle-card">
                    <div>
                        <div class="card-title">
                            <h1 class="marca-title"><?= $row['marca'] ?></h1>
                            <h2 class="modelo-title"><?= $row['linea'] ?></h2>
                        </div>
                        <div class="img-card">
                            <img src="imgs/<?= $row['imagen'] ?>" width="100%">
                        </div>
                        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia recusandae deserunt enim, eos quas eum ea molestias, similique suscipit. Inventore blanditiis magni fugit molestiae.</p>
                        <div class="actions">
                            <button><a href="login.php" class="icon-search">Cotizar vehículo</a></button>
                        </div>
                    </div>
                </li>
            	<?php endwhile; ?>
            </ul>
		</div>
	</div>
    <div id="googleMap" style="width:100%;height:400px;"></div>



<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="<?php echo $base_url; ?>/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
  </body>
</html>