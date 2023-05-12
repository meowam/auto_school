<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');
if (isset($_SESSION["user_id"])) {
    if (isAuth()) {
        $user = getCurrentUser();
    } else {
        header("location: /login.php");
    }
} else{
    header("location: /login.php");
}
?>