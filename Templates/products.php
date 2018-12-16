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
    <h2>Товары</h2>
</header>
<body>

<table>
    <thead>
    <tr>
        <th>№</th>
        <th>Наименование</th>
        <th>Цена</th>
        <th>Краткое описание</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product) : ?>
    <tr>
        <td><?php echo $product->id; ?></td>
        <td><a href="/App/?ctrl=Product&id=<?php echo $product->id; ?>"><?php echo $product->name; ?></a></td>
        <td><?php echo $product->price; ?></td>
        <td><?php echo $product->brief; ?></td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>
<hr>

<footer>
    <a href="/App/?ctrl=Index"><article>Вернуться на главную</article></a>
</footer>

</body>
</html>