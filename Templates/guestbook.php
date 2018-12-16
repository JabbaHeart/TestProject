<?php session_start(); ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<header>
    <h2>Отзывы и предложения</h2>
</header>
<body>

    <hr>
    <?php foreach ($records as $record) { ?>

    <article><?php echo $record->getAuthor(); ?></article>
    <article><?php echo $record->getMessage(); ?></article>
    <hr>
    <?php } ?>

<footer>
    <a href="/App/?ctrl=AddRecordGb">Оставить отзыв</a>
    <a href="/App/index.php"><article>Вернуться на главную</article></a>
</footer>

</body>
</html>