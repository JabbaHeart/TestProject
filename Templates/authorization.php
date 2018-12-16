<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<header>
    <h3>Заполните данные формы</h3>
</header>
<body>

<form action="/App/?ctrl=AuthorizationUser" method="post">
    Введите логин:<input type="text" name="login">
    Введите пароль:<input type="password" name="password">
    <button type="submit">Отправить</button>
</form>

</body>
</html>