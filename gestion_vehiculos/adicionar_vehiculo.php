<?php $page = 'gestionar_vehiculos' ?>
<?php require "../layouts/conexion.php"; ?>
<?php 
  if ($_POST) {
      $marca = $_POST["marca"];
      $linea = $_POST["linea"];
      $color = $_POST["color"];
      $placa = $_POST["placa"];
      $descripcion = $_POST["descripcion"];
      $precio = $_POST["precio"];

      if ($marca != "" && $linea != "" && $color != "" && $placa != "" && $descripcion != "" && $precio != "") {
          $query = "INSERT INTO gestion_vehiculos_tbl VALUES('','$marca','$linea','$color','$placa', '$descripcion', '$precio')";
          $row = mysqli_query($con,$query);
          if ($row) {
              echo "<script>alert('Vehículo registrado exitosamente');</script>";     

      } else{
          echo "<script>alert('Hay campos sin llenar')</script>";
      }
    }
  }
?>
<?php include '../layouts/header.php' ?>
<?php include '../layouts/navbar.php' ?>
  <div class="content">
    <div>
      <form method="POST">
        <h1>Nuevo vehiculo</h1>
        <hr>
        <label>Marca:</label>
        <input type="text" name="marca" class="form-control" required>
        <label>Línea:</label>
        <input type="text" name="linea" class="form-control" required>
        <label >Color</label>
        <input type="text" name="color" class="form-control" required>
        <label>Placa</label>
        <input type="text" name="placa" class="form-control" required>
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control" cols="30" rows="10"></textarea>
        <label>Precio</label>
        <input type="number" name="precio" class="form-control" required>
        <br>
        <input class="btn btn-success" type="submit" value="Enviar">
        <input class="btn btn-info" type="reset" value="Borrar">
        <a class="btn btn-primary" href="vehiculos.php">Volver</a>      
      </form>
    </div>
  </div>
<?php include '../layouts/footer.php'; ?>