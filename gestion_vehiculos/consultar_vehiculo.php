<?php require "../layouts/conexion.php"; ?>
<?php 
  if ($_GET) {
    $id=$_GET['id'];
    $query=mysqli_query($con,"SELECT * FROM gestion_vehiculos_tbl WHERE id_vehiculos=$id");
    $row=mysqli_fetch_array($query);
  }
?>
<?php include '../layouts/header.php'; ?>
<?php include '../layouts/navbar.php' ?>
  <div class="content">
    <div>
      <a class="btn btn-primary" href="vehiculos.php">Volver</a>
      <table class="table ">
        <tr>
          <th>Marca</th>
          <td><?php echo $row['marca']; ?></td>
        </tr>
        <tr>
          <th>Modelo</th>
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
<?php include '../layouts/footer.php' ?>