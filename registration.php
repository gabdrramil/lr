<!doctype html>
<title>Registration Form</title>
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
    .registertext{
        color: #333;
        font-size: 28px;
        text-align: center;
        margin-bottom: 30px;
    }

    h2 {

    }
    input[type=text], input[type=password], input[type=email], select {
        border: none;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 25px;
        padding: 10px;
        width: 100%;
    }
    select {
        background-image: url("https://cdn4.iconfinder.com/data/icons/flags-of-the-world-2/100/Flag_of_{COUNTRY_CODE}.png");
        background-repeat: no-repeat;
        background-position: 5px center;
        padding-left: 40px;
    }
    input[type=checkbox] {
        margin-right: 10px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        display: inline-block;
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
        display: inline-block;
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
    <div class="container">
        <h2 class="registertext">Регистрация</h2>
        <form action="regScript.php" method="post">
            <label for="username">Имя пользователя</label>
            <input type="text" id="username" name="username" placeholder="Введите имя пользователя">

            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" placeholder="Введите пароль">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Введите свой email">

            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
