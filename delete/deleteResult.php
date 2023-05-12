<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_GET)) {
	$id_result = $_GET['id'];
	$sql = "DELETE FROM `results_test` WHERE `id_result` = '$id_result'";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-result.php");
	} else {
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
