<?php require "../layouts/conexion.php"; ?>
<?php 
  if ($_POST) {
      $nombre = $_POST["nombre"];
      $cargo = $_POST["Cargo"];
      $tipo_documento = $_POST["tipo_documento"];
      $numero_documento = $_POST["numero_documento"];

      if ($nombre != "" && $Cargo != "" && $tipo_documento != "" && $numero_documento != "") {

          $query ="INSERT INTO gestion_vehiculos_tbl VALUES('','$nombre','$cargo','$tipo_documento','$numero_documento')";
            $row=mysqli_query($con,$query);
          if ($row) {
              echo "<script>alert('Usuario registrado exitosamente');</script>";
          

      } else{
          echo "<script>alert('hay campos sin llenar')</script>";
      }
    }
  }
?>
<?php include '../layouts/header.php'; ?>
<?php include '../layouts/navbar.php' ?>
  <div class="content">
    <div>
      <form method="POST">
        <h1>Nuevo empleado</h1>
        <hr>
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
        <label>Cargo</label>
        <input type="number" name="cargo" class="form-control" required>
        <label >Tipo de documento</label>
        <select class="form-control" name="tipo_documento" >    
          <option>Seleccione tipo de documento...</option>
          <option value="C.C">C.C</option>
          <option value="C.E">C.E</option>
        </select>
        <label>Número de documento</label>
        <input type="text" name="numero_documento" class="form-control" required>
        <br>
        <input class="btn btn-success" type="submit" value="Enviar">
        <input class="btn btn-info" type="reset" value="Borrar">
        <a class="btn btn-primary" href="empleados.php">Volver</a>        
      </form>
    </div>
  </div>
<?php require "../seguridad/auth.php"; ?>
<?php include '../layouts/footer.php' ?>