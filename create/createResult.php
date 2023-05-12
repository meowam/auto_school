<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {
    $result = mysqli_real_escape_string($conn, $_POST['result']);
    $student_id = $_POST['student_id'];
    $date = $_POST['date'];
    if ($result >= 18) {
        $status = 1;
    } else {
        $status = 0;
    }
    $sql = "INSERT INTO `results_test` (`student_id`, `date_result`, `score_result`, `status_result`) 
    VALUES ( '$student_id', '$date ', '$result', '$status')";

    if (mysqli_query($conn, $sql)) {
        header("location: /create/result.php");
    } else {
        echo "Помилка, спробуйте ще раз.";
    }
}

mysqli_close($conn);
