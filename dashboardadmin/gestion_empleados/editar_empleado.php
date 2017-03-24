<?php require "../../layouts/conexion.php"; 
  if ($_GET) {
    $id    = $_GET['id'];
    $query = mysqli_query($con,"SELECT * FROM gestion_empleados_tbl WHERE id_empleados = $id");
    $row   = mysqli_fetch_array($query);
  }
  if ($_POST) {
    $nombre = $_POST["nombre"];
    $cargo  = $_POST["cargo"];
    $tipo_documento   = $_POST["tipo_documento"];
    $numero_documento = $_POST["numero_documento"];    
    
    $query ="UPDATE gestion_empleado_tbl SET nombre ='$nombre', cargo ='$cargo', tipo_documento ='$tipo_documento', numero_documento ='$numero_documento' WHERE id_empleados = $id";
    $row   = mysqli_query($con,$query);
    if ($row) {
        echo "<script>alert('Empleado modificado con exito!');</script>";
    }
    else {
      echo "<script>alert('Error al realizar la consulta!')<script>";
    }
    
  }
  require '../../layouts/header.php'; 
  require '../../layouts/navbar.php';
?>
  <div class="content">
    <div class="container">
      <form method="POST" class="form-group">
        <h1>Editar empleado</h1>
        <hr>
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" required>
        <label>Cargo</label>
        <input type="text" name="cargo" class="form-control" value="<?php echo $row['cargo']; ?>" required>
        <label>Tipo de documento</label>
        <select name="tipo_documento" class="form-control">    
          <option <?php if ($row['tipo_documento'] == "C.C") echo "selected"; ?> value="C.C">C.C</option>
          <option <?php if ($row['tipo_documento'] == "C.E") echo "selected"; ?> value="C.E">C.E</option>
        </select><br>
        <label>Número documento</label>
        <input type="number" name="numero_documento" class="form-control" value="<?php echo $row['numero_documento']; ?>" required>
        <br><br>
        <input class="btn btn-success input-edit" type="submit" value="Editar">
        <a class="btn btn-primary" href="empleados.php">Volver</a>
      </form>
    </div>
  </div>
<?php require "../../layouts/footer.php" ?>
