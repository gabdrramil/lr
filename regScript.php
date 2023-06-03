<?php
$db = mysqli_connect("localhost", "root", "", "myforum");
session_start();
include("dbconnect.php");
$login = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$query = mysqli_query($db, "SELECT * FROM `users` WHERE `username`='{$login}'");
if (mysqli_num_rows($query) == 0) {
    $_SESSION['user'] = ['nick' => $login];
    mysqli_query($db, "INSERT INTO `users` (`username`, `password`, `email`) VALUES ('{$login}', '{$password}', '{$email}')");
    header("Location: /index.php");
} else {
    echo("Ошибка: Данный логин занят другим пользователем.");
}