<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фитнес</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>ФИТНЕС КЛУБ</h1>
        </div>
        <nav>
            <a href="/">Главная</a>
            <a href="/">Наша команда</a>
            <?php

            if (empty($_SESSION)) {
                echo "<a href='/authorization.php'>Авторизация</a><a href='/registration.php'>Регистрация</a>";
            } else if ($_SESSION['role'] == 2) {
                echo "<a href='/editTrener.php'>Редактировать</a><a href='/addTrener.php'>Добавить</a><a href='/destroy.php'class='logout'>Выйти</a>";
            } else {
                echo "<a href='/account.php'class='account'>Личный кабинет</a><a href='/application.php'class='account'>Отправить заявку</a><a href='/destroy.php'class='account'>Выйти</a>";
            }
            ?>

        </nav>
    </header>
</body>

</html>