<?php 
    require "../layouts/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>gestionar empleados</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
<?php 
    require "../layouts/conexion.php";
?>
  <style>
        table{
          margin-top: 20px;
          border: 1px solid silver;
        }
        body{
          padding: 20px 400px;
        }
        a{
          margin-top: 100px;
        }
  </style>
</head>
<body>
	 <?php 
    if ($_GET) {
      $id=$_GET['id'];
      $query=mysqli_query($con,"SELECT * FROM registro_tbl WHERE id_registro=$id");
      $row=mysqli_fetch_array($query);
    }
    ?>
    <a class="btn btn-primary" href="empleados.php">return</a>
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
    
</body>
</html>