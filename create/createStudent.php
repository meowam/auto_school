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
	$place_of_sw = mysqli_real_escape_string($conn, $_POST['place_of_sw']);

	$sql = "INSERT INTO `students` ( `surname`, `name`, `patronymic`, `date_birthday`, `home_adress`, `telephone`, `email`, `place_of_sw`) VALUES 
	('$surname', '$name', '$patronymic', '$date_birthday', '$home_adress', '$telephone', '$email', '$place_of_sw')";

	if (mysqli_query($conn, $sql)) {
		header("location: /create/student.php");
	} else{
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
