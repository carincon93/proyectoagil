<?php 
  session_start(); 
  require "layouts/conexion.php"; 
  $base_url="http://localhost/proyectoagil"; 

  if ($_POST) {
    $code=$_POST['code'];
    $correo     = mysqli_real_escape_string ($con,$_POST['correo']);  
    $contrasena = mysqli_real_escape_string ($con,$_POST['contrasena']);
    if ($correo != "" && $contrasena != "") {
      $query = "SELECT nombre, apellido1 FROM registro_tbl WHERE correo = '$correo' AND contrasena = '$contrasena'"; 
      $row   = mysqli_query($con,$query);

      if (mysqli_num_rows($row) > 0) {
        $data = mysqli_fetch_array($row);
        $_SESSION['name'] = $data['nombre']." ".$data['apellido1'];
        switch ($code) {
          case '123':
            header("location: dashboardadmin/index.php");
            break;
          case '12':
            header("location: dashboardempleado/index.php");
            break;
          default:
            header("location: dashboarduser/index.php");
            break;
        }        
      } else {
        echo "<script>alert('El correo o la contraseña no son correctos!')</script>";
      }
      mysqli_free_result($row);
      mysqli_close($con);
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Login</title>
  <link rel="stylesheet" href="<?php echo $base_url; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>/css/master.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>/css/font-awesome.min.css">
</head>
<body>
  <div class="container-login container">
    <div class="flex-content row">
      <div class="title-login col-md-4">
        <h1>Login</h1>
      </div>
      <div class="login-form col-md-6 offset-md-1">
        <form method="POST" class="form-group">   
          <input type="password" name="code" placeholder="Código" class="form-control">     
          <input  type="email" name="correo" value="<?php if (isset($_POST['correo'])) {echo $_POST['correo'];} ?>" class=" form-control" placeholder="Correo Electrónico" required>
          <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
          <button class="btn btn-success" type="submit">Ingresar</button>
          <a class="btn btn-success" href="registro.php">Crear nueva cuenta</a>
        </form>
      </div>
    </div>
  </div>
<?php include 'layouts/footer.php' ?>
