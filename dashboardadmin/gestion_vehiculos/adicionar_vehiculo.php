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
      <form method="POST" enctype="multipart/form-data" id="add">
        <h1>Nuevo vehiculo</h1>
        <hr>
        <div>
          <label>Marca</label>
          <select name="marca" class="form-control" data-validation="required">
            <option value>Seleccione marca</option>
            <option value="mazda">Mazda</option>
            <option value="ford">Ford</option>
            <option value="volkswagen">Volkswagen</option>
          </select>
        </div>
        <div>
          <label>Línea</label>
          <input type="text" name="linea" class="form-control" data-validation="required">
        </div>
        
        <div>
          <label>Imágen</label>
          <input type="file" name="imagen" class="form-control" accept="image/png" data-validation="required">          
        </div>
        
        <div>
          <label >Color</label>
          <input type="text" name="color" class="form-control" data-validation="required">          
        </div>
        <div>
          <label>Placa</label>
          <input type="text" name="placa" class="form-control" data-validation="required">          
        </div>
        
        <div>
          <label>Descripción</label>
          <textarea name="descripcion" class="form-control" cols="30" rows="10" data-validation="required"></textarea>          
        </div>
        
        <div>
          <label>Precio</label>
          <input type="number" name="precio" class="form-control" data-validation="required">
        </div>
        
        <br>
        <input class="btn btn-success input-edit" type="submit" value="Enviar">
        <input class="btn btn-info input-edit" type="reset" value="Borrar">
        <a class="btn btn-primary" href="vehiculos.php">Volver</a>      
      </form>
    </div>
  </div>
<?php include '../../layouts/footer.php'; ?>