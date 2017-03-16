
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
	    		<a href="" class="link" data-toggle="collapse" href="#" data-target="#vehicles-toggle" aria-expanded="false" aria-controls="vehicles-toggle">Contactanos</a>
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
	    	</nav>	
	    </div>	

		<div class="container col col-md-10">
			<section class="owl-carousel owl-theme">
				<img src="imgs/galeria2.jpg" alt="">
				<img src="imgs/galeria3.jpg" alt="">
				<img src="imgs/galeria4.jpg" alt="">
				<img src="imgs/galeria8.jpg" alt="">
				<img src="imgs/galeria9.jpg" alt="">
			</section>
		
			<section class="descrip">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sequi velit ipsum deserunt modi, accusamus assumenda culpa, reprehenderit ducimus nesciunt alias? Tempore voluptas sed eligendi ipsum fuga explicabo, id amet possimus, illo, libero ea deserunt. Omnis aperiam, quibusdam dolor nobis quidem quos soluta reprehenderit, sunt est eos, ratione quis. Quis!</p>
			</section>
        </div>

<?php 
	require "layouts/footer.php";

?> 