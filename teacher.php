<?php
if (!isset($_GET['id'])) {
	header("location: /pages-teacher.php");
}
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>



<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>