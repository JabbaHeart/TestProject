<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование новости</title>
</head>
<body>

<form action="/App/?ctrl=Update&id=<?php echo $article->id; ?>" method="post">
    <p><textarea name="header"><?php echo $article->header; ?></textarea></p>
    <p><textarea name="message"><?php echo $article->message; ?></textarea></p>
    <p><button type="submit">Редактировать</button></p>
</form>

</body>
</html>