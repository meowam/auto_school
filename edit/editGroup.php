<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {
	$name_group = mysqli_real_escape_string($conn, $_POST['name_group']);
	$id_group = $_POST['id_group'];
	$teacher_id = $_POST['teacher_id'];
	$date_start = $_POST['date_start'];
	$date_end = $_POST['date_end'];


	$sql = "UPDATE `groups` SET `name_group` = '$name_group', `teacher_id` = '$teacher_id', `date_of_enrollment` = '$date_start', 
	`date_of_graduation` = '$date_end' WHERE `groups`.`id_group` = '$id_group'";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-group.php");
	} else {
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
