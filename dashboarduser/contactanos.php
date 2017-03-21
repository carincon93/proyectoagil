<?php 
	session_start();
	$base_url="http://localhost/proyectoagil";
	include '../layouts/navbar-user.php';
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
    	<div class="content">
    		<form  method="POST" class="form-group sugerencias">
    			<h3>Buzón de Sugerencias</h3><br>
    			<i class="fa fa-user"></i><input class="form-control " type="email"  value="concesionario@gmail.com.co" disabled=""	><br>
    			<i class="fa fa-user"></i><input class="form-control " type="email"  placeholder="De" required="" ><br>
    			<i class="fa fa-envelope"></i><textarea class="form-control " name="" id="" cols="30" rows="10" placeholder="Escribenos" required=""></textarea><br>
    			<input class="btn btn-primary" type="submit" value="Enviar">
    		</form>
    	</div>
    </div>
<?php require "../layouts/footer.php"; ?> 

	