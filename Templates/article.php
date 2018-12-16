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
    <h3><?php echo $article->header; ?></h3>
</header>
<body>

<article><?php echo $article->message; ?></article>

<?php if($article->author_id !== null) { ?>

<article><?php echo 'Автор: ' . $author->fullname; ?></article>

<?php } else { ?>

<article><?php echo 'Автор: не указан'; ?></article>

<?php } ?>

<hr>

<footer>
    <a href="/App/?ctrl=News"><article>Вернуться к списку новостей</article></a>
</footer>

</body>
</html>