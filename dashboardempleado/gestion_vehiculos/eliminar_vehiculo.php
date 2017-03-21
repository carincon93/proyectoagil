<?php
	include "../../layouts/conexion.php";
	if ($_GET) {
		$id = $_GET['id'];
		$row = mysqli_query($con, "DELETE FROM gestion_vehiculos_tbl WHERE id_vehiculos = $id");
		if ($row) {
		echo "<script>
			alert('Vehículo eliminado con exito!');
			window.location.replace('vehiculos.php');
		</script>";
		}
	}
?>