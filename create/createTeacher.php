<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {
	$surname = mysqli_real_escape_string($conn, $_POST['surname']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$patronymic = mysqli_real_escape_string($conn, $_POST['patronymic']);
	$date_birthday = $_POST['date_birthday'];

	$home_adress = mysqli_real_escape_string($conn, $_POST['home_adress']);
	$telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$price = $_POST['price'];

	$sql = "INSERT INTO `teachers` (`surname_teacher`, `name_teacher`, `patronymic_teacher`, 
    `date_birthday_teacher`, `home_adress_teacher`, `telephone_teacher`, `email_teacher`, `price_driving`) 
    VALUES ('$surname', '$name', '$patronymic', '$date_birthday', '$home_adress', '$telephone', '$email', '$price')";

	if (mysqli_query($conn, $sql)) {
		header("location: /create/teacher.php");
	} else{
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
