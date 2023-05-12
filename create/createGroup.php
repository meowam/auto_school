<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {
	$name_group = mysqli_real_escape_string($conn, $_POST['name_group']);
	$teacher_id = $_POST['teacher_id'];
	$date_start = $_POST['date_start'];
	$date_end = $_POST['date_end'];

	$sql = "INSERT INTO `groups` (`name_group`, `teacher_id`, `date_of_enrollment`,`date_of_graduation`) 
	VALUES ('$name_group', '$teacher_id', '$date_start','$date_end')";

	if (mysqli_query($conn, $sql)) {
		header("location: /create/group.php");
	} else{
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
