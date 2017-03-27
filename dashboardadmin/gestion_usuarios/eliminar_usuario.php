<?php 
	session_start();
	$page = 'gestionar_usuarios';

	include "../../php/conexion.php";
	if ($_GET) {
		$id = $_GET['id'];
		$sql =  "DELETE FROM clientes WHERE id_cliente = $id";
		if (mysqli_query($con, $sql)) {
			$_SESSION['action'] = 'delete';
			header("location:usuarios.php");
			exit();
		}
	}
?>