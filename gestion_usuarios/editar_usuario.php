<?php 
    require "../layouts/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>usuario</title>
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
  <?php 
    if ($_GET) {
      $id=$_GET['id'];
      $query=mysqli_query($con,"SELECT * FROM registro_tbl WHERE id_registro=$id");
      $row=mysqli_fetch_array($query);
    }
    ?>
  <form method="POST">
    <h1>Editar usuario</h1>
    <br><br>
    <label>Nombre</label>
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br><br>


    <label>Primer apellido</label>
    <input type="text" name="apellido1" value="<?php echo $row['apellido1']; ?>" required><br><br>
    
    <label>Segundo apellido</label>
    <input type="text" name="apellido2" value="<?php echo $row['apellido2']; ?>" ><br><br>
    
    <label>Sexo</label>
    <select name="sexo">
      <option <?php if ($row['sexo'] == "F") echo "selected"; ?> value="F">F</option>
      <option <?php if ($row['sexo'] == "M") echo "selected"; ?> value="M">M</option>
    </select><br><br> 

    <label>Telefono</label>
    <input type="number" name="telefono" value="<?php echo $row['telefono']; ?>" required><br><br>

    <label>Tipo de Documento</label>
    <select name="tipo_documento" id="">
      <option <?php if ($row['tipo_documento'] == "C.C") echo "selected"; ?>  value="C.C">C.C</option>
      <option <?php if ($row['tipo_documento'] == "T.I") echo "selected"; ?> value="T.I">T.I</option>
    </select><br><br> 

    <label>Número de documento</label>
    <input type="number" name="numero_documento" value="<?php echo $row['numero_documento']; ?>" required><br><br>
    
    
    <label>Correo</label>
    <input type="correo" name="correo" value="<?php echo $row['correo']; ?>"  required><br><br>


    <label>Contraseña</label>
    <input type="password" value="<?php echo $row['contrasena']; ?>" name="contrasena"><br><br>
    

    <input type="submit" value="enviar">


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
                
                    $query="UPDATE registro_tbl SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', sexo='$sexo', telefono='$telefono', tipo_documento='$tipo_documento', numero_documento='$numero_documento', correo='$correo', contrasena='$contrasena' WHERE id_registro = $id";

                    $row=mysqli_query($con,$query);
                    if ($row) {
                        echo "<script>alert('se han actualizado los datos con exito');
                        windows.location.replace(usuarios.php)</script>";
                    }else{
                        echo "<script>alert('no conect')</script>";
                        
                    }
                }
            }
     ?>
  
</body>
</html>