<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_GET)) {
	$student_id = $_GET['id'];
	$group = $_GET['group'];
	$sql = "DELETE FROM `group_students` WHERE `student_id` = '$student_id'";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-group.php?id=$group");
	} else {
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
