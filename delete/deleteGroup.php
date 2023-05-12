<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_GET)) {
	$id_group = $_GET['id'];
	$sql = "DELETE FROM `groups` WHERE `id_group` = '$id_group'";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-group.php");
	} else {
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
