<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= '/css/app.css' ?>">
    <title><?= config('app.author') ?></title>
</head>
<body>
<main class="section">
    <h1 class="title">
        <?= config('app.author') ?>
    </h1>
    <div class="box">
        <ul>
            <?php foreach (config('app.skills') as $skill): ?>
                <li>
                    <?= $skill ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</main>
</body>
</html>
