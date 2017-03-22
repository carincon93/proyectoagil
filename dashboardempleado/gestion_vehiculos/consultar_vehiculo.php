<?php 
  require "../../layouts/conexion.php"; 

  if ($_GET) {
    $id     = $_GET['id'];
    $query  = mysqli_query($con, "SELECT * FROM gestion_vehiculos_tbl WHERE id_vehiculos = $id");
    $row    = mysqli_fetch_array($query);
  }
  include '../../layouts/header.php';
  include '../../layouts/navbar-empleado.php';
?>
  <div class="content">
    <div class="container-fluid">
      <a class="btn btn-primary" href="vehiculos.php">Volver</a>
      <div class="table-fluid">
        <table class="table">
          <tr>
            <th>Marca</th>
            <td><?php echo $row['marca']; ?></td>
          </tr>
          <tr>
            <th>Línea</th>
            <td><?php echo $row['linea']; ?></td>
          </tr>
          <tr>
            <th>Color</th>
            <td><?php echo $row['color']; ?></td>
          </tr>
          <tr>
            <th>Placa</th>
            <td><?php echo $row['placa']; ?></td>
          </tr>
          <tr>
            <th>Descripción</th>
            <td><?php echo $row['descripcion']; ?></td>
          </tr> 
          <tr>
            <th>Precio</th>
            <td><?php echo $row['precio']; ?></td>
          </tr> 
        </table>
      </div>
    </div>
  </div>
<?php include '../../layouts/footer.php' ?>