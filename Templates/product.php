<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Товары</title>
</head>
<header>
    <h3><?php echo $product->name; ?></h3>
</header>
<body>

    <article><?php echo $product->info; ?></article>
    <hr>

    <footer>
        <a href="/App/index.php"><article>Вернуться на главную</article></a>
    </footer>

</body>
</html>