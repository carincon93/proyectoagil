<?php
  session_start();
  $page = 'gestionar_vehiculos';
  require "../../php/conexion.php"; 

  if ($_GET) {
    $id     = $_GET['id'];
    $sql  = mysqli_query($con, "SELECT * FROM vehiculos WHERE id_vehiculo = $id");
    $row    = mysqli_fetch_array($sql);
  }
  include '../../layouts/header-empleado.php';
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