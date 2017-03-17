<?php 
    if (isset($_SESSION["name"])) {
        $usuario = $_SESSION["name"];
    }else {
        echo "<script>
            alert('El contenido no esta disponible... Por favor Inicie Sesión');
            window.location.replace('http://localhost/proyectoagil/login.php');
        </script>";
    }

 ?>
    <nav class="arr">
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><li class="li"><?php echo $usuario; ?></li>
        </button>
        <div class="dropdown-menu">
          <a href="cerrar_sesion.php">Cerrar Sesión</a>
        </div>
      </div>
    </nav>
    <div class="navigation">
    	<nav>
    		<a href="" class="link" data-toggle="collapse" href="#" data-target="#vehicles-toggle" aria-expanded="false" aria-controls="vehicles-toggle">Vehiculos</a>
    		<ul class="collapse vehicles <?php if ($page != 'dashboard') { echo "show";} ?>" id="vehicles-toggle" aria-expanded="false">
    			<li>
    				<a href="<?php echo $base_url; ?>/mazda-user.php" class="<?php if ($page == 'mazda') { echo 'active';} ?>">Mazda</a>
    			</li>
    			<li>
    				<a href="<?php echo $base_url; ?>/ford-user.php" class="<?php if ($page == 'ford') { echo 'active';} ?>">Ford</a>
    			</li>
    			<li>
    				<a href="<?php echo $base_url; ?>/volkswagen-user.php" class="<?php if ($page == 'volkswagen') { echo 'active';} ?>">Volkswagen</a>
    			</li>
    		</ul>
    	</nav>
    </div>