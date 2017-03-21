<?php 
	$page = 'gestionar_usuarios';

	include "../../layouts/conexion.php";
	if ($_GET) {
		$id = $_GET['id'];
		$row = mysqli_query($con, "DELETE FROM registro_tbl WHERE id_registro = $id");
		if ($row) {
		echo "<script>
				alert('Usuario eliminado con exito!');
				window.location.replace('usuarios.php');
			</script>";
		}
	}
?>