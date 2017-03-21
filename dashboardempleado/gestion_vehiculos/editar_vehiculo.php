<?php 
  $page = "editar_vehiculo";
  require "../../layouts/conexion.php";
 
  if ($_GET) {
    $id     = $_GET['id'];
    $query  = mysqli_query($con, "SELECT * FROM gestion_vehiculos_tbl WHERE id_vehiculos = $id");
    $row    = mysqli_fetch_array($query);
  }
  if ($_POST) {
    $marca = $_POST["marca"];
    $linea = $_POST["linea"];
    $imagen = $_FILES["imagen"]["name"];
    $color = $_POST["color"];
    $placa = $_POST["placa"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
  
    $query = "UPDATE gestion_vehiculos_tbl SET 
    marca   = '$marca', 
    linea   = '$linea',
    imagen  = '$imagen', 
    color   = '$color', 
    placa   = '$placa', 
    descripcion = '$descripcion', 
    precio  = '$precio'
    WHERE id_vehiculos = $id";

    $row = mysqli_query($con,$query);
    if ($row) {
      echo "<script>
              alert('Vehículo modificado con exito!');
              window.location.replace('vehiculos.php');
            </script>";
    } else {
      echo "<script>alert('Error al realizar la consulta!')<script>";
    }
    if ($_FILES) {
      if ($_FILES['imagen']['type'] == 'image/png') {
     
        if ($_FILES['imagen']['error'] > 0) {
          echo "Error: ".$_FILES['imagen']['error'];
        } else {
          if (file_exists('../../imgs/'.$_FILES['imagen']['name'])) {
            echo "El archivo ".$_FILES['imagen']['name']." ya existe!";
          } else {
            move_uploaded_file($_FILES['imagen']['tmp_name'], '../../imgs/' . $_FILES['imagen']['name']);
          }
        }
      } else {
        echo "Error: La imagen no es png!";
      }
    }
  }
  include '../../layouts/header.php';
  include '../../layouts/navbar.php';  
?>
  <div class="content">
    <div class="container">
      <form method="POST" class="form-group" enctype="multipart/form-data">
        <h1>Editar vehículo</h1>
        <hr>
        <label>Marca:</label>
        <input type="text" name="marca" class="form-control" value="<?php echo $row['marca']; ?>">
        <label>Línea:</label>
        <input type="text" name="linea" class="form-control" value="<?php echo $row['linea']; ?>">
        <label>Imágen:</label>
        <input type="file" name="imagen" class="form-control" accept="image/png" required>
        <label >Color</label>
        <input type="text" name="color" class="form-control" value="<?php echo $row['color']; ?>">
        <label>Placa</label>
        <input type="text" name="placa" class="form-control" value="<?php echo $row['placa']; ?>">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control" cols="30" rows="10"><?php echo $row['descripcion']; ?></textarea>
        <label>Precio</label>
        <input type="number" name="precio" class="form-control" value="<?php echo $row['precio']; ?>">

        <br>
        <input class="btn btn-success" type="submit" value="Editar">
        <a class="btn btn-primary" href="vehiculos.php">Volver</a>
      </form>
    </div>
  </div>
</div>
<?php require "../../layouts/footer.php" ?>
