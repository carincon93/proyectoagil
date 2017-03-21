<?php require "../../layouts/conexion.php";
  if ($_POST) {
    $nombre = $_POST["nombre"];
    $cargo = $_POST["cargo"];
    $tipo_documento = $_POST["tipo_documento"];
    $numero_documento = $_POST["numero_documento"];

    if ($nombre != "" && $cargo != "" && $tipo_documento != "" && $numero_documento != "") {

      $query = "INSERT INTO gestion_empleados_tbl VALUES('','$nombre','$cargo','$tipo_documento','$numero_documento')";
      $row   = mysqli_query($con,$query);
      if ($row) {
          echo "<script>alert('Empleado registrado exitosamente!');</script>";
      } else{
        echo "<script>alert('Error al realizar la consulta!')</script>";
      }
    }
  }
  include '../../layouts/header.php';
  include '../../layouts/navbar.php';
?>
  <div class="content">
    <div class="container">
      <form method="POST" class="form-group">
        <h1>Nuevo empleado</h1>
        <hr>
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
        <label>Cargo</label>
        <input type="text" name="cargo" class="form-control" required>
        <label >Tipo de documento</label>
        <select class="form-control" name="tipo_documento" >    
          <option>Seleccione tipo de documento...</option>
          <option value="C.C">C.C</option>
          <option value="C.E">C.E</option>
        </select>
        <label>Número de documento</label>
        <input type="number" name="numero_documento" class="form-control" required>
        <br>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-info">Borrar</button>
        <button type="button" class="btn"><a href="empleados.php">Volver</a></button>      
      </form>
    </div>
  </div>
<?php include '../../layouts/footer.php' ?>