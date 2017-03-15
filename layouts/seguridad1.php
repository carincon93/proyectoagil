<?php 
	 if (!isset($_SESSION['name'])){
		echo "
		<script>
			alert('debe loguearse para poder ingresar...');
			window.location.replace('../login.php');
		</script>
		";
	}
 ?>