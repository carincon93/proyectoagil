<?php 
    require "../layouts/conexion.php";
    require "../layouts/header.php";
    require "../layouts/navbar.php";
?>
    <h1>gestionar vehiculos</h1>
    <hr>
        <a class="fa fa-plus btn btn-success ar" href="adicionar_empleados.php"></a>
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
                                    <a class='fa fa-search btn btn-info act' href='consultar_vehiculo.php?id=".$row['id_vehiculos']."'></a>
                                    <a class='fa fa-pencil btn btn-primary act' href='editar_vehiculo.php?id=".$row['id_vehiculos']."'></a>
                                    <a class='fa fa-trash btn btn-danger act' href='eliminar_vehiculo.php?id=".$row['id_vehiculos']."'></a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
                
            </table>
        </div>
<?php include '../layouts/footer.php' ?>