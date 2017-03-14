<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<style>
		body{
			font-family:  'Raleway', sans-serif;
			background-color: white;
		}
		h1{
			text-align: center;
		}
		form{
			text-align: center;	
			width: 600px;
			margin: 0 auto;
			background-color: white;
			padding: 15px;
			box-shadow: 2px 4px 3px 2px #dddada;

		}
		input{
			padding: 5px;
			border:none;
			border-bottom:  1px solid #AEAAAA;
		}
		input, select{
			padding: 5px;
			width: 350px;
			display: inline-block;
			border:none;
			border-bottom:  1px solid #AEAAAA;

		}
		input[type="submit"]{
			background-color: #384346;
			padding: 5px;
			width: 300px;
			height: 30px;
			color: white;

		}

		label{
			width: 200px;
			display: inline-block;
			text-align: left;
		}

	</style>
</head>
<body>
	<form action="" method="POST">
		<h1>Registro</h1>
		

		<br><br>
		<label for="">Nombre</label>
		<input type="text" name="nombre"  required=""><br><br>


		<label for="">Primer apellido</label>
		<input type="text" name="apellido1" required=""><br><br>
		
		<label for="">Segundo apellido</label>
		<input type="text" name="apellido2" ><br><br>
 		
		<label for="">Sexo</label>
		<select name="sexo" id="">
			<option>Seleccione..</option>
			<option value="F">Femenino</option>
			<option value="M">Masculino</option>
		</select><br><br>	

		<label for="">Telefono</label>
		<input type="number" name="telefono"  required=""><br><br>

		<label for="">Tipo de Documento</label>
		<select name="tipo_documento" id="">
			<option>Seleccione..</option>
			<option value="C.C">C.C</option>
			<option value="T.I">T.I</option>
		</select><br><br>	

		<label for="">Número de documento</label>
		<input type="number" name="numero_documento" required=""><br><br>
		
		
		<label for="">Correo</label>
		<input type="email" name="correo"  required=""><br><br>


		<label for="">Contraseña</label>
		<input type="password" name="contrasena" ><br><br>
 		

		<input type="submit" value="Registrarse">


	</form>
	      <?php 
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
                
                    $con = mysqli_connect("localhost","root","","proyecto_agil_bd");
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
	
</body>
</html>