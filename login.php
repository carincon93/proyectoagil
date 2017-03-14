<?php 
  require "layouts/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

  <style>
        .container{
          width: 300px;
          margin-top: 70px;
        }
        label{
            font-size: 15px;
        }
        .btn{
          margin: 10px;
        }
        .img{
          position: absolute;
          left: 300px;
          bottom: 300px;
        }
  </style>
</head>
<body>
  <div class="container col-md-offset-5"> 
    <form method="POST">
      <h1>Login</h1>
      <hr>
      <input  type="email" name="correo" value="<?php if (isset($_POST['correo'])) {echo $_POST['correo'];} ?>" class=" form-control" placeholder="Correo Electrónico" required>
      <br>
      <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
      <input class="btn btn-success" type="submit" value="Ingresar">
      <a class="btn btn-success" href="registro.php">Crear nueva cuenta</a>
    </form>
  </div>
  
  
  <?php 
  if ($_POST) {
    $correo=mysqli_real_escape_string($con,$_POST['correo']);  
    $contrasena=mysqli_real_escape_string($con,$_POST['contrasena']);
    if ($correo !="" && $contrasena !="") {
      $query="SELECT nombre, apellido1 FROM registro_tbl WHERE correo='$correo' AND contrasena='$contrasena'"; 
      $row=mysqli_query($con,$query);

      if (mysqli_num_rows($row)>0) {
        $data=mysqli_fetch_array($row);
        $_SESSION['name']=$data['nombre']." ".$data['apellido1'];
        header("location: dashboard.php");
      }else{
        echo "<script>alert('el correo o la contraseña no son correctos')</script>";
      }
      mysqli_free_result($row);
      mysqli_close($con);
    }
  }
?>
</body>
</html>
