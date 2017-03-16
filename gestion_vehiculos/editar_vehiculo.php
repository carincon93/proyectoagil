<?php require "../layouts/conexion.php"; ?>
<?php  
  if ($_GET) {
    $id=$_GET['id'];
    $query=mysqli_query($con,"SELECT * FROM gestion_vehiculos_tbl WHERE id_vehiculos=$id");
    $row=mysqli_fetch_array($query);
  }
  $page = "editar_vehiculo";
  include '../layouts/header.php';
  include '../layouts/navbar.php';
?>
<?php 
 if ($_POST) {
  $marca = $_POST["marca"];
  $linea = $_POST["linea"];
  $color = $_POST["color"];
  $placa = $_POST["placa"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];

  if ($marca != "" && $linea != "" && $color != "" && $placa != "" && $descripcion != "" && $precio != "") {
    $query= "UPDATE gestion_vehiculos_tbl SET 
    marca='$marca', 
    linea='$linea', 
    color='$color', 
    placa='$placa', 
    descripcion='$descripcion', 
    precio='$precio'
    WHERE id_vehiculos = $id";

    $row=mysqli_query($con,$query);
    if($row) {
      echo "<script>alert('Datos modificados con exito');</script>";
      } else {
        echo "<script>alert('no conectado')<script>";
      }
  }
  }
?>
  <div class="content">
    <div>
      <form method="POST">
        <h1>Editar vehiculo</h1>
        <hr>
        <label>Marca:</label>
        <input type="text" name="marca" class="form-control" value="<?php echo $row['marca']; ?>" required>
        <label>Modelo:</label>
        <input type="text" name="linea" class="form-control" value="<?php echo $row['linea']; ?>" required>
        <label >Color</label>
        <input type="text" name="color" class="form-control" value="<?php echo $row['color']; ?>" required>
        <label>Placa</label>
        <input type="text" name="placa" class="form-control" value="<?php echo $row['placa']; ?>" required>
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control" cols="30" rows="10"><?php echo $row['descripcion']; ?></textarea>
        <label>Precio</label>
        <input type="number" name="precio" class="form-control" value="<?php echo $row['precio']; ?>" required>

        <br>
        <input class="btn btn-success" type="submit" value="Enviar">
        <input class="btn btn-info" type="reset" value="Borrar">
        <a class="btn btn-primary" href="vehiculos.php">Volver</a>
      </form>
    </div>
  </div>
</div>
<?php require "../layouts/footer.php" ?>
