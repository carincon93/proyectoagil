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
      $query=mysqli_query($con,"SELECT * FROM gestion_vehiculos_tbl WHERE id_vehiculos=$id");
      $row=mysqli_fetch_array($query);
    }
    ?>
    <a class="btn btn-primary" href="vehiculos.php">return</a>
    <table class="table ">
      <tr>
        <th>Marca</th>
        <td><?php echo $row['marca']; ?></td>
      </tr>
      <tr>
        <th>Modelo</th>
        <td><?php echo $row['modelo']; ?></td>
      </tr>
      <tr>
        <th>Color</th>
        <td><?php echo $row['color']; ?></td>
      </tr>
      <tr>
        <th>Placa</th>
        <td><?php echo $row['placa']; ?></td>
      </tr>   
    </table>
</body>
</html>