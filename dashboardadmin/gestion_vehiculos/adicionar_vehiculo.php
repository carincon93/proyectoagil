<?php $page = 'gestionar_vehiculos' ?>
<?php require "../../layouts/conexion.php"; ?>
<?php 
  if ($_POST) {
    $marca = $_POST["marca"];
    $linea = $_POST["linea"];
    $imagen = $_FILES["imagen"]["name"];
    $color = $_POST["color"];
    $placa = $_POST["placa"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];

    if ($marca != "" && $linea != "" && $color != "" && $placa != "" && $descripcion != "" && $precio != "") {
      $query = "INSERT INTO gestion_vehiculos_tbl VALUES(default, '$marca', '$linea', '$imagen', '$color', '$placa', '$descripcion', '$precio')";
      $row = mysqli_query($con,$query);
      if ($row) {
          echo "<script>
                  alert('Vehículo registrado con exito!');
                  
                </script>";
      } else {
          echo "<script>alert('Error al realizar la consulta!');</script>";
      }
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
?>
<?php include '../../layouts/header.php' ?>
<?php include '../../layouts/navbar.php' ?>
  <div class="content">
    <div class="container">
      <form method="POST" class="form-group" enctype="multipart/form-data">
        <h1>Nuevo vehiculo</h1>
        <hr>
        <label>Marca:</label>
        <select name="marca" class="form-control" required>
          <option value>Seleccione marca</option>
          <option value="mazda">Mazda</option>
          <option value="ford">Ford</option>
          <option value="volkswagen">Volkswagen</option>
        </select>
        <label>Línea:</label>
        <input type="text" name="linea" class="form-control" required>
        <label>Imágen</label>
        <input type="file" name="imagen" class="form-control" accept="image/png" required>
        <label >Color</label>
        <input type="text" name="color" class="form-control" required>
        <label>Placa</label>
        <input type="text" name="placa" class="form-control" required>
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control" cols="30" rows="10"></textarea>
        <label>Precio</label>
        <input type="number" name="precio" class="form-control" required>
        <br>
        <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn btn-info">Borrar</button>
        <button type="button" class="btn"><a href="vehiculos.php">Volver</a></button>
    
      </form>
    </div>
  </div>
<?php include '../../layouts/footer.php'; ?>