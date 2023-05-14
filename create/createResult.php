<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {
    $result = mysqli_real_escape_string($conn, $_POST['result']);
    $student_id = $_POST['student_id'];
    $date = $_POST['date'];

    if ($result >= 18) {
        $status = 1;
        $numRows = getLastIdByTable('id_certificate','certificates_of_graduation');
        $numRows['last_id']++;
        $str = 'AO 00000';
        $str = substr_replace($str, $numRows['last_id'], -strlen($numRows['last_id']));
        $str = str_pad($str, 5, '0', STR_PAD_LEFT);

        $sql = "INSERT INTO `certificates_of_graduation` (`student_id`, `date_of_receipt`, `series_of_certificate`) 
        VALUES ( '$student_id', '$date', '$str')";

        mysqli_query($conn, $sql);
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
