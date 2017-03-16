<?php 
	session_start();
	$base_url="http://localhost/proyectoagil";
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
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/master2.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/owl.theme.default.min.css">
  </head>
  <body>
    <div class="container-page">	
		<nav class="arr">
		      <div class="btn-group">
		        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><li class="li"><?php echo $_SESSION["name"]; ?></li>
		        </button>
		        <div class="dropdown-menu">
		          <a href="cerrar_sesion.php">Cerrar Sesión</a>
		        </div>
		      </div>
	    </nav>
	    <div class="navigation">
	    	<nav>
	    		<a href="" class="link" data-toggle="collapse" href="#" data-target="#vehicles-toggle" aria-expanded="false" aria-controls="vehicles-toggle">Vehiculos</a>

	    		<ul class="collapse vehicles <?php if ($page != 'dashboard') { echo "show";} ?>" id="vehicles-toggle" aria-expanded="false">
	    			<li>
	    				<a href="<?php echo $base_url; ?>/mazda.php" class="<?php if ($page == 'mazda') { echo 'active';} ?>">Mazda</a>
	    			</li>
	    			<li>
	    				<a href="<?php echo $base_url; ?>/ford.php" class="<?php if ($page == 'ford') { echo 'active';} ?>">Ford</a>
	    			</li>
	    			<li>
	    				<a href="<?php echo $base_url; ?>/volkswagen.php" class="<?php if ($page == 'volkswagen') { echo 'active';} ?>">Volkswagen</a>
	    			</li>
	    		</ul>
	    		<a href="" class="link" data-toggle="collapse" href="#" data-target="#vehicles-toggle" aria-expanded="false" aria-controls="vehicles-toggle">Contactanos</a>
	    	</nav>	
	    </div>	
	    <div class="contacto">
	    	
	    	
	    </div>


<?php 
	require "layouts/footer.php";
?> 

	