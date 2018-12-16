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

    <a href="/App/?ctrl=Delete&id=<?php echo $article->id; ?>">Удалить</a>
    <a href="/App/formForUpdateArticle.php?id=<?php echo $article->id; ?>">Редактировать</a>
    <hr>
        <?php endforeach; ?>

    <form action="/App/?ctrl=Create" method="post">
        <p>Заголовок:</p>
        <p><input type="text" name="header"></p>
        <p>Новость:</p>
        <p><textarea name="message"></textarea></p>
        <p><button type="submit">Добавить новость</button></p>
    </form>
    <hr>

<footer>
    <a href="/App/?ctrl=AdminPanel"><article>Вернуться в админ-панель</article></a>
</footer>

</body>
</html>