<?php 
    $page = 'sugerencias';
    include '../layouts/header-user.php';
	include '../layouts/navbar-user.php';
?>
	<div class="content">
        <div class="container-fluid">
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

	