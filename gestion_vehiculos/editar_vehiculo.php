<?php 
    require "../layouts/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>vehiculos</title>
 <link rel="stylesheet" href="../css/bootstrap.min.css">

  <style>
        input[type=number]::-webkit-outer-spin-button, input[type=number]::-webkit-inner-spin-button{
            -webkit-appearance:none;
        }
        nav{
            height: 36px;
            width: 100%;
            background-color: black;
        }
        .container{
          width: 300px;
        }
        li{
            display: inline-block;
            list-style: none;
        }
        h1{
          color: #151414;
        }
        label{
          color: #151414;
          font-size: 15px;
        }
        .select{
          margin: 5px;
        }
        form{
          width: 295px;
        }
        .form-control{
          width: 97%;
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
    <div class="container col-md-offset-5">
    <form method="POST">
      <h1>editar vehiculo</h1>
      <hr>
      <label><em><ins>Marca:</ins></em></label>
      <input type="text" name="marca" class="form-control" value="<?php echo $row['marca']; ?>" required>
      <label><em><ins>Modelo:</ins></em></label>
      <input type="number" name="modelo" class="form-control" value="<?php echo $row['modelo']; ?>" required>
      <label ><em><ins>Color</ins></em></label>
      <input type="text" name="color" class="form-control" value="<?php echo $row['color']; ?>" required>
      <label><em><ins>Placa</ins></em></label>
      <input type="text" name="placa" class="form-control" value="<?php echo $row['placa']; ?>" required>
      <br><br>
      <input class="btn btn-success" type="submit" value="enviar">
      <input class="btn btn-info" type="reset" value="borrar">
      <a class="btn btn-primary" href="vehiculos.php">return</a>
    </form>
  </div>
  <?php 
       if ($_POST) {
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $color = $_POST["color"];
            $placa = $_POST["placa"];
             if ($marca != "" && $modelo != "" && $color != "" && $placa != "") {
              $query="UPDATE gestion_vehiculos_tbl SET marca='$marca', modelo='$modelo', color='$color', placa='$placa' WHERE id_vehiculos = $id";
              $row=mysqli_query($con,$query);
              if($row) {
                  echo "<script>alert('Datos modificados con exito ...');</script>";
          }
          else{
          echo "<script>alert('no conectado')<script>";
        }
        }
      }
    ?>
<?php require "../layouts/footer.php" ?>
