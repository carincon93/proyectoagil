<?php
	session_start();
	include "../../php/conexion.php";
	if ($_GET) {
		$id = $_GET['id'];
		$sql =  "DELETE FROM empleados WHERE id_empleado = $id";
		if (mysqli_query($con, $sql)) {
			$_SESSION['action'] = 'delete';
            header("location:empleados.php");
            exit();
		}
	}
?>