<?php 
	 if (!$code==123){
		echo "
		<script>
			alert('Usted no es administrador de la pagina!!!');
			window.location.replace('../vista_user.php');
		</script>
		";
	}
 ?>