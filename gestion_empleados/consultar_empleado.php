<?php 
    require "../layouts/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>gestionar empleados</title>
<?php 
    require "../layouts/conexion.php";
?>
  <style>
        table{
          text-align : center;
          border: 1px solid silver;
          background-color: silver;
          height: 500px;
          width: 500px
        }
        .img{
          position: absolute;
          left: 300px;
          bottom: 250px;
        }
        th{
          border: 2px solid black;
        }
        td{
          border: 2px solid black;
        }
        body{
          padding: 20px 400px;
        }
        img{
            position: relative:
            top:200px;
        }
        a{
            position: absolute;
            right: 1000px;
            bottom: 200px;

        }
  </style>
</head>
<body>
	 <?php 
    if ($_GET) {
      $id=$_GET['id'];
      $query=mysqli_query($con,"SELECT * FROM gestion_empleados_tbl WHERE id_empleados=$id");
      $row=mysqli_fetch_array($query);
    }
    ?>
    <table>
      <tr>
        <th>nombre</th>
        <td><?php echo $row['nombre']; ?></td>
      </tr>
      <tr>
        <th>cargo</th>
        <td><?php echo $row['cargo']; ?></td>
      </tr>
      <tr>
        <th>tipo documento</th>
        <td><?php echo $row['tipo_documento']; ?></td>
      </tr>
      <tr>
        <th>numero documento</th>
        <td><?php echo $row['numero_documento']; ?></td>
      </tr>   
    </table>
    <div class="img">
      <a href="vehiculos.php">return</a>
  </div>
</body>
</html>