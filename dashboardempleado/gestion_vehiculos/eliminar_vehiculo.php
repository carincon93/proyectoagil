<?php
	session_start();
	include "../../php/conexion.php";
	if ($_GET) {
		$id = $_GET['id'];
		$sql =  "DELETE FROM vehiculos WHERE id_vehiculo = $id";
		if (mysqli_query($con, $sql)) {
		    $_SESSION['action'] = 'delete';
      		header("location:vehiculos.php");
      		exit();
		}
	}
?>