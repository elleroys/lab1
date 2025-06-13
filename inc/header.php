<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($title ?? 'Без назви') ?></title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<header>
    <h1><?= htmlspecialchars($title ?? 'Без назви') ?></h1>
    <nav>
        <a href="index.php?page=home">Головна</a>
        <a href="index.php?page=form">Форма</a>
        <a href="index.php?page=result">Результат</a>
    </nav>
</header>
<div class="container">

    <main>
        <h1><?= htmlspecialchars($title ?? 'Без назви') ?></h1>
