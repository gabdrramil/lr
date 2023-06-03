<?php
require "dbconnect.php";
session_start();
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
        .thread{
            background-color: palegreen;
            margin: 20px;
            padding: 10px;
            border-radius: 10px;

        }
        .threadname{
            vertical-align: top;
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
        .description{
            vertical-align: top;
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

    <?php
    include "header.php";
    ?>

    <a href="test.php">123</a>

    <?php
    $result = $conn->query("SELECT * FROM threads");

    while ($row = $result->fetch()){
?>
        <a href="/thread.php?threadid=<?=$row['threadid']?>">
            <div class="thread">
                <h3 class="threadname">
                     <?= $row['name']?>
                </h3>
                <div class="description">
                    <?= $row['description']?>
                </div>
            </div>
        </a>

    <?php
         }
        ?>

</body>
</html>