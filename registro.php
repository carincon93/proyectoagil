<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<style>
		body{
			font-family:  'Raleway', sans-serif;
			background-color: #FFCFCF;
		}
		h1{
			text-align: center;
		}
		form{
			text-align: center;	
			width: 600px;
			height: 580px;
			margin: 0 auto;

		}
		input{
			padding: 5px;
			border: none;
		}
		input, select{
			padding: 5px;
			width: 350px;
			display: inline-block;
			border:none;
		}
		input[type="submit"]{
			background-color: #AB5357;
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
	<h1>Registro</h1>
	<form action="" method="">
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
		<select name="tipo_doc" id="">
			<option>Seleccione..</option>
			<option value="CC">Cédula de ciudadania</option>
			<option value="TI">Tarjeta de identidad</option>
		</select><br><br>	

		<label for="">Número de documento</label>
		<input type="number" name="numero_doc" required=""><br><br>
		
		
		<label for="">E-mail</label>
		<input type="email" name="email"  required=""><br><br>

		<input type="submit" value="Registrarse">


	</form>
	
</body>
</html>