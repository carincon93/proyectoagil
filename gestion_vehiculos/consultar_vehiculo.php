<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
  <style>
        table{
          text-align : center;
          border: 1px solid silver;
          background-color: silver;
          height: 500px;
          width: 500px
        }
        th{
          border: 2px solid black;
        }
        td{
          border: 2px solid black;
        }
        body{
          padding: 20px 400px;
          background: url("../public/imgs/Fondo-Gris.jpg");
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
    $con   = mysqli_connect('localhost','root','','proyect');
    if ($_GET) {
      $id=$_GET['id'];
      $query=mysqli_query($con,"SELECT * FROM environments WHERE id_environment=$id");
      $row=mysqli_fetch_array($query);
    }
    ?>
    <table>
      <tr>
        <th>Environment name</th>
        <td><?php echo $row['environment_name']; ?></td>
      </tr>
      <tr>
        <th>State environment</th>
        <td><?php echo $row['state_environment']; ?></td>
      </tr>
      <tr>
        <th>Assigned instructor</th>
        <td><?php echo $row['assigned_instructor']; ?></td>
      </tr>
      <tr>
        <th>Assigned file</th>
        <td><?php echo $row['assigned_file']; ?></td>
      </tr>
      <tr>
        <th>Apprentices number</th>
        <td><?php echo $row['apprentices_number']; ?></td>
      </tr>
      <tr>
        <th>Formation center</th>
        <td><?php echo $row['formation_center']; ?></td>
      </tr>
      <tr>
        <th>Department</th>
        <td><?php echo $row['department']; ?></td>
      </tr>
      <tr>
        <th>City</th>
        <td><?php echo $row['city']; ?></td>
      </tr>     
    </table>
    <a href="environment.php"><img src="../public/imgs/return.jpg"></a>
</body>
</html>