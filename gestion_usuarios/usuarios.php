<?php 
    require "../layouts/conexion.php";
    require "../layouts/header.php";
    require "../layouts/navbar.php";
?>
    <h1>gestionar usuarios</h1>
    <hr>
        <a class="fa fa-plus btn btn-success ar" href="../registro.php"></a>
        <a class="btn btn-primary" href="../dashboard.php">volver</a>
        <div class="container">
            <table class="table table-bordered">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>correo</th>
                        <th>Actions</th>
                    </tr>
                    
                </thead>
                <?php 
                    $query = mysqli_query($con, "SELECT * FROM registro_tbl");
                    while($row = mysqli_fetch_array($query)){
                        echo "
                            <tr>
                                <td>".$row['id_registro']."</td>
                                <td>".$row['correo']."</td>
                                <td>
                                    <a class='fa fa-search btn btn-info' href='consultar_usuario.php?id=".$row['id_registro']."'></a>
                                    <a class='fa fa-pencil btn btn-primary' href='editar_usuario.php?id=".$row['id_registro']."'></a>
                                    <a class='fa fa-trash btn btn-danger' href='eliminar_usuario.php?id=".$row['id_registro']."'></a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
                
            </table>
        </div>
<?php include '../layouts/footer.php' ?>