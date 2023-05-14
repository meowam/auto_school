<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {
    $name_surname = mysqli_real_escape_string($conn, $_POST['name_surname']);
    $contacts = mysqli_real_escape_string($conn, $_POST['contacts']);

    $teacher_id = $_POST['teacher_id'];
    $student_id = $_POST['student_id'];
    $date_practice = $_POST['date_practice'];
    $price = $_POST['price'];
    $id = $_POST['id'];

    if ($student_id == '00') {
        $sql = "UPDATE `driving` SET `date_driving` = '$date_practice', `teacher_id` = '$teacher_id', `pib` = '$name_surname', 
        `contact_student` = '$contacts', `price` = '$price' WHERE `driving`.`id_driving` = '$id'";
    } else {
        $sql = "UPDATE `driving` SET `date_driving` = '$date_practice', `teacher_id` = '$teacher_id', 
        `student_id` = '$student_id', `price` = '$price' WHERE `driving`.`id_driving` = '$id'";
    }

	if (mysqli_query($conn, $sql)) {
		header("location: /pages-practice.php");
	} else {
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
