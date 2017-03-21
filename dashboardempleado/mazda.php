<?php 
    $page = "mazda";
    $base_url="http://localhost/proyectoagil";
    include '../layouts/conexion.php';
    $query = mysqli_query($con, "SELECT * FROM gestion_vehiculos_tbl WHERE marca = 'mazda' ");
    include '../layouts/header.php';
    include '../layouts/navbar.php'; 
?>
    <div class="content">
        <div>            
            <ul>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                <li class="col-md-4 offset-md-1 col-sm-6 offset-sm-3 col-10 offset-1 vehicle-card">
                    <div class="card-title">
                        <h1 class="marca-title"><?= $row['marca'] ?></h1>
                        <h2 class="modelo-title"><?= $row['linea'] ?></h2>
                    </div>
                    <div>
                        <div class="img-card">
                            <img src="../imgs/<?= $row['imagen'] ?>" width="100%">
                        </div>
                        <p class="card-description"><?= $row['descripcion']  ?></p>
                        <div class="actions">
                            <button type="button" class="btn btn-primary icon-cart" data-toggle="modal" data-target="#myModal"></button>
                            <button><a href="gestion_vehiculos/editar_vehiculo.php?id=<?= $row['id_vehiculos'] ?>" class="btn fa fa-pencil"> Editar vehículo</a></button>
                        </div>
                    </div>
                </li>
                <?php endwhile ?>       
            </ul>
        </div>        
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table>
                <thead>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Precio</th>
                </thead>
                <tbody>
                    <tr>
                        <td>CX-3</td>
                        <td>2017</td>
                        <td id=""><?= $vehiculo['precio'] ?></td>
                    </tr>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
<?php include '../layouts/footer.php'; ?>