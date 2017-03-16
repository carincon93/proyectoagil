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
  <div class="container col-md-offset-5">
    <form method="POST">
      <h1>nuevo empleado</h1>
      <hr>
      <label><em><ins>Nombre:</ins></em></label>
      <input type="text" name="nombre" class="form-control" required>
      <label><em><ins>Cargo:</ins></em></label>
      <input type="number" name="cargo" class="form-control" required>
      <label ><em><ins>tipo de documento</ins></em></label>
      <option>Seleccione tipo de documento.. </option>
      <option value="T.I">t</option>
      <label><em><ins>numero documento</ins></em></label>
      <input type="text" name="numero_documento" class="form-control" required>
      <br><br>
      <input class="btn btn-success" type="submit" value="enviar">
      <input class="btn btn-info" type="reset" value="borrar">
      <a class="btn btn-primary" href="empleados.php">return</a>
      
    </form>
  </div>
  <?php 
        if ($_POST) {
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $color = $_POST["color"];
            $placa = $_POST["placa"];

            if ($marca != "" && $modelo != "" && $color != "" && $placa != "") {

                $query ="INSERT INTO gestion_vehiculos_tbl VALUES('','$marca','$modelo','$color','$placa')";
                  $row=mysqli_query($con,$query);
                if ($row) {
                    echo "<script>alert('Usuario registrado exitosamente');</script>";
                

            } else{
                echo "<script>alert('hay campos sin llenar')</script>";
            }
          }
        }
    ?>
</body>
</html>