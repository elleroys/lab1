<?php
// Якщо в сесії є колір — використовуємо, інакше білий
$bg = $_SESSION['bgcolor'] ?? '#ffffff';
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($title ?? 'Без назви') ?></title>
    <link rel="stylesheet" href="style/style.css">
</head>
<!-- додаємо inline-стиль фону -->
<body style="background-color: <?= htmlspecialchars($bg) ?>;">
<header>
    <?php
    $username = $_COOKIE['username'] ?? null;
    $gender = $_COOKIE['gender'] ?? null;

    if ($username && $gender) {
        $title_gender = ($gender === 'male') ? 'Пане' : 'Пані';
        echo "<p>Вітаємо Вас, {$title_gender} " . htmlspecialchars($username) . "</p>";
    }
    ?>

    <h1><?= htmlspecialchars($title ?? 'Без назви') ?></h1>
    <nav>
        <a href="index.php?page=home">Головна</a>
        <a href="index.php?page=form">Форма</a>
        <a href="index.php?page=result">Результат</a>
        <a href="index.php?page=settings">Налаштування</a>
    </nav>
</header>
<div class="container">
