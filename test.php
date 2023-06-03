<?php
session_start();
if (isset($_SESSION['user'])) {
    Print_r($_SESSION);
    $currentDateTime = date('Y-m-d H:i:s');
    echo $currentDateTime;
} else {
    header("Location: /login.php");
}
?>