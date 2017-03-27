<?php 
	include 'php/conexion.php';
	$base_url="http://localhost/proyectoagil";
	if ($_POST) {

	    $nombre =$_POST["nombre"];
	    $apellido1 = $_POST["apellido1"];
	    $apellido2 = $_POST["apellido2"];
	    $sexo = $_POST["sexo"];
	    $telefono = $_POST["telefono"];
	    $tipo_documento = $_POST["tipo_documento"];
	    $numero_documento = $_POST["numero_documento"];
	    $correo = $_POST["correo"];
	    $contrasena = $_POST["contrasena"];



	    if ($nombre != '' && $apellido1 != '' && $sexo != '' && $telefono != '' && $tipo_documento != '' && $numero_documento != '' && $correo != '' && $contrasena != '') {
	        $sql = "INSERT INTO clientes VALUES (DEFAULT, '$nombre', '$apellido1', '$apellido2', '$sexo', '$telefono', '$tipo_documento', '$numero_documento', '$correo', '$contrasena')";

	        if (mysqli_query($con, $sql)) {
	            header("location:login.php");
	            exit(); 
	        } else {
	            echo "<script>alert('Error al realizar la consulta!')</script>";            
	        }
	    }
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Registro</title>	
	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/bootstrap.min.css">
  	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/master.css">
  	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/font-awesome.min.css">	
</head>
<body>
	<div class="container-fluid">
	    <div class="title-login">
	      
	    </div>
	    <div class="sign-form col-md-6 offset-md-3 col-sm-6">
	    	<h1>Registro</h1>
			<form action="" method="POST" id="add">
				<div>
					<label for="">Nombre</label>
					<input type="text" name="nombre" class="form-control" data-validation="length" data-validation-length="min4">
				</div>
				<div>
					<label for="">Primer apellido</label>
					<input type="text" name="apellido1" class="form-control" data-validation="length" data-validation-length="min4">	
				</div>
				
				<div>
					<label for="">Segundo apellido</label>
					<input type="text" name="apellido2" class="form-control">
				</div>	
				
				<div>
					<label for="">Sexo</label>
					<select name="sexo" class="form-control" data-validation="required">
						<option value>Seleccione..</option>
						<option value="F">Femenino</option>
						<option value="M">Masculino</option>
					</select>
				</div>
				
				<div>
					<label for="">Telefono</label>
					<input type="number" name="telefono" class="form-control" data-validation="length numeric" data-validation-length="min7">
				</div>
				<div>
					<label for="">Tipo de Documento</label>
					<select name="tipo_documento" class="form-control" data-validation="required">
						<option value>Seleccione..</option>
						<option value="C.C">C.C</option>
						<option value="C.E">C.E</option>
					</select>
				</div>
				
				<div>
					<label for="">Número de documento</label>
					<input type="number" name="numero_documento" class="form-control" data-validation="length number" data-validation-length="min10">		
				</div>
				<div>
					<label for="">Correo</label>
					<input type="email" name="correo" class="form-control" data-validation="email">
				</div>
				<div>
					<label for="">Contraseña</label>
					<input type="password" name="contrasena" class="form-control" data-validation="length" data-validation-length="min8">
				</div>
				<br>
				<input type="submit" value="Registrarse" class="btn btn-primary">
        		<a class="btn btn-primary" href="index.php">Volver</a>
			</form>      
	    </div>
  	</div>
<?php include 'layouts/footer.php'; ?>