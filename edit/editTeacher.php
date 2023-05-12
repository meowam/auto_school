<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {
	$surname = mysqli_real_escape_string($conn, $_POST['surname']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$patronymic = mysqli_real_escape_string($conn, $_POST['patronymic']);
	$date_birthday = $_POST['date_birthday'];
	$id = $_POST['id'];

	$home_adress = mysqli_real_escape_string($conn, $_POST['home_adress']);
	$telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$price = $_POST['price'];

	$sql = "UPDATE `teachers` SET `surname_teacher` = '$surname', `name_teacher` = '$name', `patronymic_teacher` = '$patronymic', 
    `date_birthday_teacher` = '$date_birthday', `home_adress_teacher` = '$home_adress', `telephone_teacher` = '$telephone', 
    `email_teacher` = '$email', `price_driving` = '$price' WHERE `teachers`.`id_teacher` = '$id'";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-teacher.php");
	} else{
		echo "Помилка, спробуйте ще раз.";
	}
}

 mysqli_close($conn);
