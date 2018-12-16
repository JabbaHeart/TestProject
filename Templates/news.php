<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
</head>
<header>
    <h3>Новости и акции</h3>
</header>
<body>

<?php foreach ($news as $article) : ?>

    <a href="/App/?ctrl=Article&id=<?php echo $article->id; ?>"><article><?php echo $article->header; ?></article></a>
    <hr>
<?php endforeach; ?>

<footer>
    <a href="/App/?ctrl=Index"><article>Вернуться на главную</article></a>
</footer>

</body>
</html>