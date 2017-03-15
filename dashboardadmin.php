<?php $page = "dashboard"?>
<?php include 'layouts/header.php'; ?>
	<nav class="arr">
		<div class="btn-group">
		  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><li class="li"><?php echo $_SESSION['name']; ?></li>
		  </button>
		  <div class="dropdown-menu">
		    <a href="cerrar_sesion.php">cerrar</a>
		  </div>
		</div>
		
	</nav>
<?php include 'layouts/navbar.php'; ?>
<?php include 'layouts/footer.php'; ?>

