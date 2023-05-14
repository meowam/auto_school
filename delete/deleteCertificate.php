<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_GET)) {
	$id_certificate = $_GET['id'];
	$sql = "DELETE FROM `certificates_of_graduation` WHERE `id_certificate` = '$id_certificate'";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-certificates.php");
	} else {
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
