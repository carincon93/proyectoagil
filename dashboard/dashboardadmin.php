<?php 
	require "../layouts/header.php";
	require "../layouts/seguridad1.php";
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
<?php require "../layouts/footer.php" ?>

