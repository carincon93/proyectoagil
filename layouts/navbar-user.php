<?php 
    if (isset($_SESSION["name"])) {
        $usuario = $_SESSION["name"];
    } else {
        echo "<script>
            alert('Inicie sesión por favor!');
            window.location.replace('http://localhost/proyectoagil/login.php');
        </script>";
    }
?>
    <nav class="dashboard-navbar">
        <i class="fa fa-bars"></i>
        <div class="btn-group">
           <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <li class="name-user"><?php echo $usuario; ?></li>
           </button>
           <div class="dropdown-menu">
             <a href="../cerrar_sesion.php">Cerrar Sesión</a>
           </div>
        </div>
    </nav>
    <div class="navigation">
    	<nav>
    		<a href="" class="link" data-toggle="collapse" href="#" data-target="#vehicles-toggle" aria-expanded="false" aria-controls="vehicles-toggle">Vehiculos</a>
    		<ul class="collapse vehicles <?php if ($page == 'mazda' || $page == 'ford' || $page == 'volkswagen') { echo "show";} ?>" id="vehicles-toggle" aria-expanded="false">
    			<li>
    				<a href="<?php echo $base_url; ?>/dashboarduser/mazda-user.php" class="<?php if ($page == 'mazda') { echo 'active';} ?>">Mazda</a>
    			</li>
    			<li>
    				<a href="<?php echo $base_url; ?>/dashboarduser/ford-user.php" class="<?php if ($page == 'ford') { echo 'active';} ?>">Ford</a>
    			</li>
    			<li>
    				<a href="<?php echo $base_url; ?>/dashboarduser/volkswagen-user.php" class="<?php if ($page == 'volkswagen') { echo 'active';} ?>">Volkswagen</a>
    			</li>
    		</ul>
            <a href="contactanos.php" class="link">Buzón de sugerencias</a>
    	</nav>
    </div>
    <div class="chat"></div>