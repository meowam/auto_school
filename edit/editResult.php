<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {
	$id = $_POST['id'];
    $result = mysqli_real_escape_string($conn, $_POST['result']);
    $student_id = $_POST['student_id'];
    $date = $_POST['date'];
    if ($result >= 18) {
        $status = 1;
    } else {
        $status = 0;
    }

	$sql = "UPDATE `results_test` SET `student_id` = '$student_id', `date_result` = '$date', `score_result` = '$result', 
    `status_result` = '$status' WHERE `results_test`.`id_result` = '$id'";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-result.php");
	} else {
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
