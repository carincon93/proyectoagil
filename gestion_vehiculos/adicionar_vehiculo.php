<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>vehiculos</title>
<?php 
    require "../layouts/conexion.php";
?>
  <style>
        input[type=number]::-webkit-outer-spin-button, input[type=number]::-webkit-inner-spin-button{
            -webkit-appearance:none;
        }
        nav{
            height: 36px;
            width: 100%;
            background-color: white;
        }
        .container{
          width: 300px;
        }
        .dropdown{
           margin-left: 1190px; 
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
        .img{
          position: absolute;
          left: 300px;
          bottom: 250px;
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
  <nav>
    <div class="dropdown">
      <button class="glyphicon glyphicon-user btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <li><?php echo $_SESSION['name']; ?></li>
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
       <li><a class="off" href="../sing_off.php">sing off</a></li>
      </ul>
    </div> 
  </nav>
  <div class="container col-md-offset-5">
    <form method="POST">
      <h1>nuevo vehiculo</h1>
      <hr>
      <label><em><ins>Marca:</ins></em></label>
      <input type="text" name="marca" class="form-control" required>
      <label><em><ins>Modelo:</ins></em></label>
      <input type="number" name="modelo" class="form-control" required>
      <label ><em><ins>Color</ins></em></label>
      <input type="text" name="color" class="form-control" required>
      <label><em><ins>Placa</ins></em></label>
      <input type="text" name="placa" class="form-control" required>
      <br><br>
      <input class="btn btn-success" type="submit" value="enviar">
      <input class="btn btn-info" type="reset" value="borrar">
    </form>
  </div>
  <div class="img">
      <a href="vehiculos.php">return</a>
  </div>
  <?php 
        if ($_POST) {
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $color = $_POST["color"];
            $placa = $_POST["placa"];

            if ($marca != "" && $modelo != "" && $color != "" && $placa != "") {

                $query ="INSERT INTO environments VALUES('','$marca','$modelo','$color','$placa')";
                  $row=mysqli_query($con,$query);
                if ($row) {
                    echo "<script>alert('Usuario registrado exitosamente');</script>";
                

            } else{
                echo "<script>alert('hay campos sin llenar')</script>";
            }
          }
        }
    ?>
<?php require "../layouts/footer.php" ?>
