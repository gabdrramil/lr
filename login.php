<!doctype html>
<html lang="en">
<head>
    <title>Login Form</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: 100px auto;
            padding: 20px;
            width: 400px;
        }
        .textenter{
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }
        h2 {

        }
        input[type=text], input[type=password] {
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
            padding: 10px;
            width: 100%;
        }
        input[type=submit] {
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            padding: 10px;
            width: 100%;
        }
        input[type=submit]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <?php
    include "header.php";
    ?>
    <div class="container" >
        <h2 class="textenter">Авторизация</h2>
        <form action="authScript.php" method="post">
            <label for="username">Имя пользователя</label>
            <input type="text" id="username" name="username" placeholder="Введите имя пользователя">

            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" placeholder="Введите свой пароль">

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
