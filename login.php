<?php $base_url="http://localhost/proyectoagil"; ?>
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
  <div class="container container-login d-flex align-items-center">
    <div class="col-md-4 offset-md-4">
      <h1>Login</h1>
        <form action="php/seguridad.php" method="POST" class="form-group">   
          <input  type="email" name="correo" value="<?php if (isset($_POST['correo'])) { echo $_POST['correo']; } ?>" class=" form-control" placeholder="Correo Electrónico" required>
          <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
          <button class="btn btn-success" type="submit">Ingresar</button>
          <a class="btn btn-success" style="color:white" href="registro.php">Crear nueva cuenta</a>
        </form>
    </div>
  </div>
<?php include 'layouts/footer.php' ?>
