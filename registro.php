<?php include 'layouts/conexion.php' ?>
<?php 
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



    if ($nombre !='' && $apellido1 !='' && $apellido2 !='' && $sexo !='' && $telefono !='' && $tipo_documento !='' && $numero_documento !='' && $correo !='' && $contrasena !='') {
        $sql = "INSERT INTO registro_tbl VALUES ('','$nombre','$apellido1','$apellido2','$sexo','$telefono','$tipo_documento', '$numero_documento', '$correo', '$contrasena')";

        $row=mysqli_query($con,$sql);
        if ($row) {
            echo "<script>alert('exito');
            windows.location.replace(dashboard.php)</script>";
        }else{
            echo "<script>alert('no conect')</script>";            
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>	
	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/bootstrap.min.css">
  	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/master.css">
  	<link rel="stylesheet" href="<?php echo $base_url; ?>/css/font-awesome.min.css">	
</head>
<body>
	<div class="container-login">
	    <div class="title-login">
	      <h1>Registro</h1>
	    </div>
	    <div>
			<form action="" method="POST">
				<label for="">Nombre</label>
				<input type="text" name="nombre" class="form-control" required="">
				<label for="">Primer apellido</label>
				<input type="text" name="apellido1" class="form-control" required="">		
				<label for="">Segundo apellido</label>
				<input type="text" name="apellido2" class="form-control"> 		
				<label for="">Sexo</label>
				<select name="sexo" class="form-control">
					<option>Seleccione..</option>
					<option value="F">Femenino</option>
					<option value="M">Masculino</option>
				</select>
				<label for="">Telefono</label>
				<input type="number" name="telefono" class="form-control" required="">
				<label for="">Tipo de Documento</label>
				<select name="tipo_documento" class="form-control">
					<option>Seleccione..</option>
					<option value="C.C">C.C</option>
					<option value="T.I">T.I</option>
				</select>
				<label for="">Número de documento</label>
				<input type="number" name="numero_documento" class="form-control" required="">		
				<label for="">Correo</label>
				<input type="email" name="correo" class="form-control" required="">
				<label for="">Contraseña</label>
				<input type="password" name="contrasena" class="form-control">
				<input type="submit" value="Registrarse" class="btn btn-primary">
			</form>      
	    </div>
  	</div>
<?php include 'layouts/footer.php'; ?>