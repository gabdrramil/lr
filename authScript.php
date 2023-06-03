<?php
$db = mysqli_connect("localhost", "root", "", "myforum");
session_start();
include("dbconnect.php");
$login = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($db, "SELECT * FROM users WHERE username='{$login}' AND password='{$password}'");
if (mysqli_num_rows($query) == 1) {
    $user = mysqli_fetch_assoc($query);
    $_SESSION['user'] = ['nick' => $login, 'userid' => $user['userId']];
    header("Location: /index.php");
}else {
    echo("Ошибка: Данный логин или пароль неправильны.");
}