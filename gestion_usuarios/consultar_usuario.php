<?php 
    require "../layouts/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>gestionar usuarios</title>
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
      $query=mysqli_query($con,"SELECT * FROM registro_tbl WHERE id_usuario=$id");
      $row=mysqli_fetch_array($query);
    }
    ?>
    <table>
      <tr>
        <th>marca</th>
        <td><?php echo $row['marca']; ?></td>
      </tr>
      <tr>
        <th>modelo</th>
        <td><?php echo $row['modelo']; ?></td>
      </tr>
      <tr>
        <th>color</th>
        <td><?php echo $row['color']; ?></td>
      </tr>
      <tr>
        <th>placa</th>
        <td><?php echo $row['placa']; ?></td>
      </tr>   
    </table>
    <div class="img">
      <a href="vehiculos.php">return</a>
  </div>
</body>
</html>