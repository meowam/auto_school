<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {
    $name_surname = mysqli_real_escape_string($conn, $_POST['name_surname']);
    $contacts = mysqli_real_escape_string($conn, $_POST['contacts']);

    $teacher_id = $_POST['teacher_id'];
    $student_id = $_POST['student_id'];
    $date_practice = $_POST['date_practice'];
    $hours = $_POST['hours'];

    $teacher = getCurrentTeacher($teacher_id);
    $sum = $hours * $teacher['price_driving'];
    if ($student_id == '00') {
        $sql = "INSERT INTO `driving` (`date_driving`, `teacher_id`, `pib`, `contact_student`, `price`) 
        VALUES ('$date_practice', '$teacher_id', '$name_surname', '$contacts', '$sum')";
    } else {
        $sql = "INSERT INTO `driving` (`date_driving`, `teacher_id`, `student_id`, `price`) 
        VALUES ('$date_practice', '$teacher_id', '$student_id', '$sum')";
    }

    echo $sql;
    if (mysqli_query($conn, $sql)) {
    	header("location: /create/practice.php");
    } else{
    	echo "Помилка, спробуйте ще раз.";
    }
}

mysqli_close($conn);
