<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <?php
    function dateOrNight (){
        $date = date('d.m.Y H:i');
        //echo $date;
        if(date('H') > 00 && date('H') < 06){
            //echo ' ночь';
            echo "<link rel='stylesheet' type='text/css' href='styles/style_night.css'>";
        }
        else{
            //echo ' день';
            echo "<link rel='stylesheet' type='text/css' href='styles/style.css'>";
        }
    }
    dateOrNight();
    ?>
</head>
<body>
<header>
    <?php
    include "header.php";
    ?>
</header>
<p>Добро пожаловать! Авторизуйтесь! Или <a href="registration.php">зарегестрируйтесь по ссылке!</a></p>
<form method="post">
        <p>
            <label for="name">Введите логин (доступ разрешен для alex)</label>
            <input type="text" id="name" name="name">
        </p>
        <p>
            <label for="password">Введите пароль (доступ разрешен для 123)</label>
            <input type="password" id="password" name="password">
        </p>
        <p>
            <button type="submit" name="send">Ок</button>
        </p>
</form>
<?php
    $login = 'alex';
    $pass = md5('123');
    if (isset($_POST ['send'])){
        if (($login == $_POST ['name']) and ($pass == md5($_POST ['password']))) {
            echo "Доступ разрешен. Добро пожаловать!";
        } else {
            echo "Неправильный логин или пароль. Доступ запрещен!";
        }
    }
?>
</body>
</html>




