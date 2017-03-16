<?php 
	if (!isset($_SESSION['name'])) {

		echo "<script>
			alert('El contenido no esta disponible... \nPor favor Inicie Sesión');
			window.location.replace('./');
		</script>";
	}
?>