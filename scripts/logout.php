<?php
require($_SERVER['DOCUMENT_ROOT'] . '/configs/db.php');

if (isset($_SESSION['user_id']) && ($_SESSION["user_id"]) != null) {
    $_SESSION['user_id'] = null;
    setcookie('user_id', '', 0, '/');
    // session_unset();
    header("Location: /index.php");
}
header("Location: /login.php");
