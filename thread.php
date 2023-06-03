<link rel="stylesheet" href="thread.css">

<?php
require "dbconnect.php";
require 'header.php';
$threadid = $_GET['threadid'];
$thread = $conn->query("
    SELECT comments.commentid, comments.comment, comments.date, comments.threadid, comments.rating, users.username
    FROM comments
    JOIN users ON comments.userid = users.userid
    WHERE comments.threadid=$threadid;"
);
?>

<?php
session_start();
if (isset($_SESSION['user'])) { ?>
<div class="message-form-container">
    <form class="message-form" method="POST">
        <div class="message-form-row">
            <label for="comment">Комментарий:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
        </div>
        <div class="message-form-row">
            <button type="submit" name="submit_comment">Отправить</button>
            <?php
            } else {
                echo ('
                    <p class="message-form-container">Вы не авторизованны</p>');}
            ?>
        </div>
    </form>
</div>

<?php
    if(isset($_POST['submit_comment'])) {
        $currentDateTime = date('Y-m-d H:i:s');
        $comment = $_POST['comment'];
        $userid = $_SESSION['user']['userId'];
        $date = $currentDateTime;
        $userid = $_SESSION['user']['userid'];
        $query = "INSERT INTO comments (comment, date, threadid, userid) VALUES ('$comment', '$date', '$threadid', '$userid')";
        if ($conn->query($query) == TRUE) {
            echo "Комментарий успешно добавлен, перезапуск страницы через секунду";
            header("Refresh: 1");
        } else {
            echo "Ошибка: " . $query . "<br>" . $conn->error;
            echo "Комментарий успешно добавлен";
        }
    }


?>

<?php
//123s

    while ($row = $thread->fetch()){;

        ?>
        <div class="message-container">
            <div class="message">
                <img src="images/userimg.jpg" alt="User Image">
                <div class="message-details">
                    <div class="message-header">
                        <span class="message-username"><?= $row['username'] ?></span>
                        <span class="message-rating">
                    <span class="message-rating-label">Ваша оценка:</span>
                    <div class="message-rating-buttons">
                        <select name="rating" id="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input type="submit" value="Оценить">
                    </div>
                    <span class="message-rating-value">Оценка: <?= $row['rating'] ?> / 5</span>
                </span>
                        <span class="message-date"><?= $row['date'] ?></span>
                    </div>
                    <div class="message-body">
                        <?= $row ['comment']?>
                    </div>
                </div>
            </div>
        </div>

        <?php

    }
    ?>

