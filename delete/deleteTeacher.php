<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_GET)) {
	$id_teacher = $_GET['id'];
	$sql = "DELETE FROM `teachers` WHERE `id_teacher` = '$id_teacher'";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-teacher.php");
	} else {
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
