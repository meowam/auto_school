<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {

	$group_id = $_POST['group_id'];
	$student_id = $_POST['student_id'];

	$sql = "INSERT INTO `group_students` (`group_id`, `student_id`) VALUES ('$group_id', '$student_id')";

	if (mysqli_query($conn, $sql)) {
		header("location: /create/studentsInGroup.php?id=$group_id");
	} else{
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
