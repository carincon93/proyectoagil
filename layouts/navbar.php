    <div class="navigation">
    	<nav>
            <a href="dashboard.php" class="link">Dashboard</a>
    		<a href="" class="link" data-toggle="collapse" href="#" data-target="#aside-nav" aria-expanded="false" aria-controls="aside-nav">Vehiculos</a>
    		<ul class="collapse vehicles <?php if ($page != 'dashboard') { echo "show";} ?>" id="aside-nav" aria-expanded="false">
    			<li>
    				<a href="mazda.php" class="<?php if ($page == 'mazda') { echo 'active';} ?>">Mazda</a>
    			</li>
    			<li>
    				<a href="ford.php" class="<?php if ($page == 'ford') { echo 'active';} ?>">Ford</a>
    			</li>
    			<li>
    				<a href="volkswagen.php" class="<?php if ($page == 'volkswagen') { echo 'active';} ?>">Volkswagen</a>
    			</li>
    		</ul>
    	</nav>
    </div>