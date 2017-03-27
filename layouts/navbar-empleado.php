    <nav class="dashboard-navbar">
        <i class="fa fa-bars"></i>
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><li class="name-user"><?php echo $_SESSION['empleado']; ?></li></button>
        <div class="dropdown-menu">
          <a href="<?php echo $base_url; ?>/php/cerrar_sesion.php">Cerrar sesión</a>
        </div>
      </div>
    </nav>
    <div class="navigation">
    	<nav>
    		<a href="" class="link" data-toggle="collapse" href="#" data-target="#vehicles-toggle" aria-expanded="false" aria-controls="vehicles-toggle">Vehiculos</a>
    		<ul class="collapse vehicles <?php if ($page == 'mazda' || $page == 'ford' || $page == 'volkswagen') { echo "show";} ?>" id="vehicles-toggle" aria-expanded="false">
    			<li>
    				<a href="<?php echo $base_url; ?>/dashboardempleado/mazda.php" class="<?php if ($page == 'mazda') { echo 'active';} ?>">Mazda</a>
    			</li>
    			<li>
    				<a href="<?php echo $base_url; ?>/dashboardempleado/ford.php" class="<?php if ($page == 'ford') { echo 'active';} ?>">Ford</a>
    			</li>
    			<li>
    				<a href="<?php echo $base_url; ?>/dashboardempleado/volkswagen.php" class="<?php if ($page == 'volkswagen') { echo 'active';} ?>">Volkswagen</a>
    			</li>
    		</ul>
            <a href="<?php echo $base_url; ?>/dashboardempleado/gestion_vehiculos/vehiculos.php" class="link <?php if ($page == 'gestionar_vehiculos') { echo 'active';} ?>">Gestionar Vehículos</a>
            <a href="<?php echo $base_url; ?>/dashboardempleado/usuarios.php" class="link <?php if ($page == 'clientes') { echo 'active';} ?>">Clientes</a>
      
    	</nav>
    </div>
    <i class="fa fa-comment-o"></i>
    <div class="chat toggle-chat">
        <section>
            <div class="chat-header">
                <h3>CHAT</h3>
            </div>
            <div class="chat-content">
                <nav class="view">
                    <ul id="msgs">
                        <li class="machine">Hola, bienvenido.</li>
                    </ul>
                </nav>
            </div>
            <div class="send">
                <input id="msg" type="text" placeholder="Escribir..."/>
                <button id="btnSend" class="fa fa-paper-plane"></button>
            </div>            
        </section>
    </div>