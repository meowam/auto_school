<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (!empty($_POST)) {
	$category_id = $_POST['category_id'];
	$teacher_id = $_POST['teacher_id'];

	$sql = "INSERT INTO `teachers_categories`(`teacher_id`, `category_id`) VALUES ('$teacher_id','$category_id')";
	if (mysqli_query($conn, $sql)) {
		header("location: /pages-category.php");
	} else{
		echo "Помилка, спробуйте ще раз.";
	}
}

mysqli_close($conn);
