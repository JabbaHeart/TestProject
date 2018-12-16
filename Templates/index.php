<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовый сайт</title>
</head>
<header>
    <h1>Тестовый сайт(название)</h1>
</header>
<body>

<?php if ($name == null) { ?>
    <article>
        Добро пожаловать! :)
    </article>
<?php } else { ?>
    <article>
        Добро пожаловать, <?php echo $name; ?>! :)
    </article>
<?php } ?>

<p>
    <a href="/App/?ctrl=Products"><article>Товары</article></a>
</p>

<p>
    <a href="/App/?ctrl=Guestbook"><article>Отзывы и предложения</article></a>
</p>

<p>
    <a href="/App/?ctrl=News"><article>Новости и акции!</article></a>
</p>

<?php if(!isset($_SESSION['login'])) { ?>

<p>
    <a href="/App/?ctrl=AuthorizationUser">Вход на сайт</a>
</p>

<?php } else { ?>

<p>
    <a href="/App/?ctrl=LogOut">Выход</a>
</p>
<?php } ?>

<p>
    <a href="/App/?ctrl=AdminPanel">Вход в админ-панель</a>
</p>

</body>
</html>