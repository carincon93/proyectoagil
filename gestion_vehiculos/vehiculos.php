<?php 
    require "../layouts/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>gestionar vehiculos</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body{
          padding: 20px 400px;
        }
        table{
            margin-top: 10px;
            border: 1px solid black;
        }

        @font-face {
          font-family: 'icomoon';
          src:  url('../fonts/icomoon.eot?fgv4ni');
          src:  url('../fonts/icomoon.eot?fgv4ni#iefix') format('embedded-opentype'),
            url('../fonts/icomoon.ttf?fgv4ni') format('truetype'),
            url('../fonts/icomoon.woff?fgv4ni') format('woff'),
            url('../fonts/icomoon.svg?fgv4ni#icomoon') format('svg');
          font-weight: normal;
          font-style: normal;
        }
        [class^="icon-"], [class*=" icon-"] {
          /* use !important to prevent issues with browser extensions that change fonts */
          font-family: 'icomoon' !important;
          speak: none;
          font-style: normal;
          font-weight: normal;
          font-variant: normal;
          text-transform: none;
          line-height: 1;

          /* Better Font Rendering =========== */
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
        }
        .icon-cart:before {
          content: "\e93a";
        }
        .icon-search:before {
          content: "\e986";
        }
        .icon-pencil:before {
          content: "\e905";
        }
        .icon-bin:before {
          content: "\e9ac";
        }
        .icon-plus:before {
          content: "\ea0a";
        }
        .icon-undo:before {
          content: "\e965";
        }
        .act{
          position: relative;
          left: 50px;
        }
        .ar{
          margin-left: 20px;
        }
    </style>
    <h1>gestionar vehiculos</h1>
    <hr>
        <a class="icon-plus btn btn-success ar" href="adicionar_empleados.php"></a>
        <a class="btn btn-primary" href="../dashboard.php">volver</a>
        <div class="container">
            <table class="table table-bordered">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>marca</th>
                        <th>Actions</th>
                    </tr>
                    
                </thead>
                <?php 
                    $query = mysqli_query($con, "SELECT * FROM gestion_vehiculos_tbl");
                    while($row = mysqli_fetch_array($query)){
                        echo "
                            <tr>
                                <td>".$row['id_vehiculos']."</td>
                                <td>".$row['marca']."</td>
                                <td>
                                    <a class='icon-search btn btn-warning act' href='consultar_vehiculo.php?id=".$row['id_vehiculos']."'></a>
                                    <a class='icon-pencil btn btn-primary act' href='editar_vehiculo.php?id=".$row['id_vehiculos']."'></a>
                                    <a class='icon-bin btn btn-danger act' href='eliminar_vehiculo.php?id=".$row['id_vehiculos']."'></a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
                
            </table>
        </div>
</body>
</html>