<?php 
    require "../layouts/header.php";
    require "../layouts/conexion.php";
?>
    <a class="glyphicon glyphicon-share-alt btn btn-primary return" href="../dashboard.php">Return</a>
    <h1>gestionar vehiculos</h1>
    <hr>
        <div class="container">
            <a class="btn btn-success add" href="adicionar_vehiculo.php">adicionar</a>
            <table border="1px">
                <tr>
                    <th>marca</th>
                    <th>Actions</th>
                </tr>
                <?php 
                    $query = mysqli_query($con, "SELECT * FROM gestion_vehiculos_tbl");
                    while($row = mysqli_fetch_array($query)){
                        echo "
                            <tr>
                                <td>".$row['marca']."</td>
                                <td>
                                    <a class='btn btn-warning' href='consultar_vehiculo.php?id=".$row['id_vehiculos']."'>consultar</a>
                                    <a class='btn btn-primary' href='editar_vehiculo.php?id=".$row['id_vehiculos']."'>editar</a>
                                    <a class='btn btn-danger' href='eliminar_vehiculo.php?id=".$row['id_vehiculos']."'>eliminar</a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
                
            </table>
        </div>
</body>
</html>