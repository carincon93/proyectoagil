<?php
include "../layouts/conexion.php";
if ($_GET) {
	$id = $_GET['id'];
	$row = mysqli_query($con, "DELETE FROM gestion_empleados_tbl WHERE id_empleados = $id");
	if ($row) {
	echo "<script>
		alert('usuario eliminado con exito');
		window.location.replace('empleados.php');
	</script>";
	}
}
?>