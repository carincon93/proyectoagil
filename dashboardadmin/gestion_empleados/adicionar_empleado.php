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
      <form method="POST" id="add">
        <h1>Nuevo empleado</h1>
        <hr>
        <div>
          <label>Nombre</label>
          <input type="text" name="nombre" class="form-control" data-validation="length" data-validation-length="min4">
        </div>
        <div>
          <label>Cargo</label>
          <input type="text" name="cargo" class="form-control" data-validation="required">
        </div>
        <div>
          <label >Tipo de documento</label>
          <select class="form-control" name="tipo_documento" data-validation="required">    
            <option value>Seleccione tipo de documento...</option>
            <option value="C.C">C.C</option>
            <option value="C.E">C.E</option>
          </select>
        </div>
        <div>
          <label>Número de documento</label>
          <input type="number" name="numero_documento" class="form-control" data-validation="length" data-validation-length="min10">
        </div>
        
        <br>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-info">Borrar</button>
        <a class="btn btn-primary" href="empleados.php">Volver</a>
    </div>
  </div>
<?php include '../../layouts/footer.php' ?>