<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_GET)) {
	$id_driving = $_GET['id'];
	$sql = "DELETE FROM `driving` WHERE `id_driving` = '$id_driving'";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-practice.php");
	} else {
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
