<header>
    <link href="style.css" rel="stylesheet" >
    <nav>
        <a href="index.php"><img class="logo" src="Images/Logo.png"></a>
        <a href="https://vk.com/gabdrramil"><img class="sn" src="Images/vklogo.png"></a>
        <ul>
            <?php
                session_start();
                if (isset($_SESSION['user'])) { ?>
                    <li>
                        <img class="userimg" src="Images/userimg.jpg">
                    </li>
                    <li>
                        <p>
                            <?php echo("ВЫ ВОШЛИ КАК:  " . $_SESSION['user']['nick']);?>
                        </p>
                    </li>
                    <li>
                        <?php echo('<a href="user.php">Выйти</a>')?>
                    </li>
                <?php
                } else {
                    echo ('
                    <li><a href="registration.php">Регистрация</a></li>
                    <li><a href="login.php">Вход</a></li> ');

                }
            ?>
        </ul>
    </nav>
</header>
