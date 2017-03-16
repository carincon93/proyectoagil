<?php require "../layouts/conexion.php"; ?>
<?php include '../layouts/header.php'; ?>
<?php 
if ($_GET) {
  $id=$_GET['id'];
  $query=mysqli_query($con,"SELECT * FROM registro_tbl WHERE id_registro=$id");
  $row=mysqli_fetch_array($query);
}
?>
<?php include '../layouts/navbar.php' ?>
  <div class="content">
    <div>
      <a class="btn btn-primary" href="usuarios.php">Volver</a>
      <table class="table">
        <tr>
          <th>Nombre</th>
          <td><?php echo $row['nombre']; ?></td>
        </tr>
        <tr>
          <th>Apellido1</th>
          <td><?php echo $row['apellido1']; ?></td>
        </tr>
        <tr>
          <th>Apellido2</th>
          <td><?php echo $row['apellido2']; ?></td>
        </tr>
        <tr>
          <th>Sexo</th>
          <td><?php echo $row['sexo']; ?></td>
        </tr>
        <tr>
          <th>Telefono</th>
          <td><?php echo $row['telefono']; ?></td>
        </tr>
        <tr>
          <th>Tipo documento</th>
          <td><?php echo $row['tipo_documento']; ?></td>
        </tr>
        <tr>
          <th>Numero documento</th>
          <td><?php echo $row['numero_documento']; ?></td>
        </tr>
        <tr>
          <th>Correo</th>
          <td><?php echo $row['correo']; ?></td>
        </tr>
        <tr>
          <th>Contrasena</th>
          <td><?php echo $row['contrasena']; ?></td>
        </tr>   
      </table>
    </div>
  </div>
<?php include '../layouts/footer.php' ?>