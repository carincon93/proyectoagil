<?php
include "../connection.php";
if ($_GET) {
	$id = $_GET['id'];
	$row = mysqli_query($con, "DELETE FROM environments WHERE id_environment = $id");
	if ($row) {
	echo "<script>
		alert('user delete succesfull...');
		window.location.replace('environment.php');
	</script>";
	}
}
?>