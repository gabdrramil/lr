<?php
require "dbconnect.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        body{
            max-width: 1100px;
        }
        *{
            font-family: Arial;
            margin: 0 auto;
        }
        .user{

            background-color: palegreen;
            margin: 20px;
            padding: 10px;
            border-radius: 10px;


        }
        .username{
            vertical-align: top;
            width: 20%;
            max-width: 250px;
            display: inline-block;
        }
        .age{
            vertical-align: top;
            width: 10%;
            max-width: 150px;
            display: inline-block;
            font-weight: bold ;
            text-align: right;
            font-size: large;
            margin-right: 15px;
        }
        .birthday{
            vertical-align: top;
            width: 56%;
            display: inline-block;
        }
        .image{
            width: 10%;
            display: inline-block;
        }
        .del-button{
            align: right;
            padding: 10px;
            margin: 5px;
            border-radius: 8px;
            border-width: 1px;
            border-color: green;
            width: 120px;
        }
    </style>
</head>
<body>
    <header>
        <link href="style.css" rel="stylesheet" >
        <nav>
            <a href="index.php"><img class="logo" src="Images/Logo.png"></a>
            <a href="https://vk.com/gabdrramil"><img class="sn" src="Images/vklogo.png"></a>
            <ul>
                <li><a href="userList.php">Список пользователей</a></li>
                <li><a href="registration.php">Регистрация</a></li>
                <li><a href="login.php">Вход</a></li>
            </ul>
        </nav>
    </header>

    <?php
    $result = $conn->query("SELECT * FROM users");

    while ($row = $result->fetch()){
?>
    <div class="user">
        <img class="image" src="images\image.jpg" />
        <div class="username">
            <?= $row['username']?>
        </div>
        <div class="birthday">
            <?= $row['birthday']?>
        </div>
        <div class="age">
            <?= $row['age']?>
        </div>
        <button class="del-button" value="удалить">
            Удалить
        </button>
    </div>

    <?php
         }
        ?>

</body>
</html>