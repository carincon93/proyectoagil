<?php 
    require "../layouts/conexion.php";
    require "../layouts/header.php";
?>
    <nav class="arr">
    <div class="btn-group">
      <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><li class="li"><?php echo $_SESSION['name']; ?></li>
      </button>
      <div class="dropdown-menu">
        <a href="../cerrar_sesion.php">cerrar</a>
      </div>
    </div>
  </nav>
      <div class="navigation">
      <nav>
            <a href="dashboard.php" class="link">Inicio</a>
        <a href="" class="link" data-toggle="collapse" href="#" data-target="#vehicles-toggle" aria-expanded="false" aria-controls="vehicles-toggle">Vehiculos</a>
        <ul class="collapse vehicles <?php if ($page != 'dashboard') { echo "show";} ?>" id="vehicles-toggle" aria-expanded="false">
          <li>
            <a href="../mazda.php" class="<?php if ($page == 'mazda') { echo 'active';} ?>">Mazda</a>
          </li>
          <li>
            <a href="../ford.php" class="<?php if ($page == 'ford') { echo 'active';} ?>">Ford</a>
          </li>
          <li>
            <a href="../volkswagen.php" class="<?php if ($page == 'volkswagen') { echo 'active';} ?>">Volkswagen</a>
          </li>
        </ul>
            <a href="../gestion_vehiculos/vehiculos.php" class="link <?php if ($page == 'gestionar_vehiculos') { echo 'active';} ?>">Gestionar Vehículos</a>
            <a href="../gestion_empleados/empleados.php" class="link <?php if ($page == 'gestionar_empleados') { echo 'active';} ?>">Gestionar Empleados</a>
            <a href="../gestion_usuarios/usuarios.php" class="link <?php if ($page == 'gestionar_usuarios') { echo 'active';} ?>">Gestionar Usuarios</a>
      </nav>
    </div>
    <h1>gestionar empleados</h1>
    <hr>
        <a class="fa fa-plus btn btn-success ar" href="adicionar_empleados.php"></a>
        <a class="btn btn-primary" href="../dashboard.php">volver</a>
        <div class="container">
            <table class="table table-bordered">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>nombre</th>
                        <th>Actions</th>
                    </tr>
                    
                </thead>
                <?php 
                    $query = mysqli_query($con, "SELECT * FROM gestion_empleados_tbl");
                    while($row = mysqli_fetch_array($query)){
                        echo "
                            <tr>
                                <td>".$row['id_empleados']."</td>
                                <td>".$row['nombre']."</td>
                                <td>
                                    <a class='fa fa-search btn btn-info act' href='consultar_empleado.php?id=".$row['id_empleados']."'></a>
                                    <a class='fa fa-pencil btn btn-primary act' href='editar_empleado.php?id=".$row['id_empleados']."'></a>
                                    <a class='fa fa-trash btn btn-danger act' href='eliminar_empleado.php?id=".$row['id_empleados']."'></a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
                
            </table>
        </div>
<?php include '../layouts/footer.php' ?>