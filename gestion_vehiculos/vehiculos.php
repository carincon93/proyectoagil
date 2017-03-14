<?php 
    require "../layouts/header.php";
    require "../layouts/conexion.php";
?>
    <a class="glyphicon glyphicon-share-alt btn btn-primary return" href="../dashboard.php">Return</a>
    <h1>gestionar vehiculos</h1>
    <hr>
        <div class="container">
            <a class="glyphicon glyphicon-plus btn btn-success add" href="adicionar_vehiculo.php"></a>
            <table>
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
                                    <a class='glyphicon glyphicon-search btn btn-warning' href='consultar_vehiculo.php?id=".$row['id_vehiculos']."'></a>
                                    <a class='glyphicon glyphicon-pencil btn btn-primary' href='editar_vehiculo.php?id=".$row['id_vehiculos']."'></a>
                                    <a href='javascript:;' class='glyphicon glyphicon-trash btn btn-danger eliminar-vehiculo' data-id='".$row['id_vehiculos']."'>eliminar</a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
                
            </table>
        </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="<?php echo $base_url; ?>/layouts/js/bootstrap.min.js"</script>

    <script>
        
        $(document).ready(function() {
            $(".eliminar-vehiculo").click(function(event) {
                $id = $(this).attr("data-id");
                $confirm = confirm("en realidad desea eliminar el vehiculo");

                if ($confirm) {
                    window.location.replace("eliminar_vehiculo.php?id="+$id);
                }
            });
        });
    </script>
</body>
</html>