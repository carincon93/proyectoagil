<?php 
    require "../layouts/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>gestionar empleados</title>
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
      $query=mysqli_query($con,"SELECT * FROM gestion_empleados_tbl WHERE id_empleados=$id");
      $row=mysqli_fetch_array($query);
    }
  ?>
  <div class="container col-md-offset-5">
    <form method="POST">
      <h1>nuevo empleado</h1>
      <hr>
      <label><em><ins>Nombre:</ins></em></label>
      <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" required>
      <label><em><ins>Cargo:</ins></em></label>
      <input type="number" name="cargo" class="form-control" value="<?php echo $row['cargo']; ?>" required>
      <label ><em><ins>tipo de documento</ins></em></label>
      <select class="btn btn-default" name="tipo_documento" >    
        <option <?php if ($row['tipo_documento'] == "C.C") echo "selected"; ?> value="C.C">C.C</option>
        <option <?php if ($row['tipo_documento'] == "T.I") echo "selected"; ?> value="T.I">T.I</option>
      </select>
      <label><em><ins>numero documento</ins></em></label>
      <input type="text" name="numero_documento" class="form-control" value="<?php echo $row['numero_documento']; ?>" required>
      <br><br>
      <input class="btn btn-success" type="submit" value="enviar">
      <input class="btn btn-info" type="reset" value="borrar">
      <a class="btn btn-primary" href="empleados.php">return</a>
      
    </form>
  </div>
  <?php 
       if ($_POST) {
            $nombre = $_POST["nombre"];
            $cargo = $_POST["cargo"];
            $tipo_documento = $_POST["tipo_documento"];
            $numero_documento = $_POST["numero_documento"];
             if ($nombre != "" && $cargo != "" && $tipo_documento != "" && $numero_documento != "") {
              $query="UPDATE gestion_vehiculos_tbl SET nombre='$nombre', cargo='$cargo', tipo_documento='$tipo_documento', numero_documento='$numero_documento' WHERE id_vehiculos = $id";
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
