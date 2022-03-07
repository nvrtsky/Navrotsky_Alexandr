<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
<p> Зарегестрируйтесь или <a href="authorization.php">вернитесь</a> на страницу авторизации</p>
<form action="authorization.php" method="post">
    <p>
        <label for="name">Придумайте логин</label>
        <input type="text" id="name" name="name">
    </p>
    <p>
        <label for="password">Придумайте пароль</label>
        <input type="password" id="password" name="password">
    </p>
    <p>
        <button type="submit">Зарегестрироваться</button>
    </p>
</form>
</body>
</html>
