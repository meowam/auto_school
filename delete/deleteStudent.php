<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_GET)) {
	$id_student = $_GET['id'];
	$sql = "DELETE FROM `students` WHERE `id_student` = '$id_student'";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-student.php");
	} else {
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
