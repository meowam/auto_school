<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {
	$name_category = mysqli_real_escape_string($conn, $_POST['name_category']);

	$sql = "INSERT INTO `categories` (`name_category`) VALUES ('$name_category')";

	if (mysqli_query($conn, $sql)) {
		header("location: /create/categoryTeacher.php");
	} else{
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
