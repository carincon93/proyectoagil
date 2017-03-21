<?php 
	 if (!isset($_SESSION['name'])){
		echo "
		<script>
			alert('Debes iniciar sesión!');
			window.location.replace('../login.php');
		</script>
		";
	}
?>