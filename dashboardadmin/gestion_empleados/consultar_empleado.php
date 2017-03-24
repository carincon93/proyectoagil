<?php require "../../layouts/conexion.php"; 
  if ($_GET) {
    $id     = $_GET['id'];
    $query  = mysqli_query($con, "SELECT * FROM gestion_empleados_tbl WHERE id_empleados = $id");
    $row    = mysqli_fetch_array($query);
  }
  require '../../layouts/header.php';
  require '../../layouts/navbar.php';
?>
  <div class="content">
    <div class="container-fluid">
      <a class="btn btn-primary" href="empleados.php">Volver</a>
      <div class="table-fluid">
        <table class="table">
          <tr>
            <th>Nombre</th>
            <td><?php echo $row['nombre']; ?></td>
          </tr>
          <tr>
            <th>Cargo</th>
            <td><?php echo $row['cargo']; ?></td>
          </tr>
          <tr>
            <th>Tipo documento</th>
            <td><?php echo $row['tipo_documento']; ?></td>
          </tr>
          <tr>
            <th>Numero documento</th>
            <td><?php echo $row['numero_documento']; ?></td>
          </tr>   
        </table>
      </div>
    </div>
  </div>
<?php include '../../layouts/footer.php'; ?>