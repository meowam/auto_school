<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_GET)) {
	$id = $_GET['id'];
	$sql = "DELETE FROM `teachers_categories` WHERE `id` = '$id'";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-category.php");
	} else {
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
