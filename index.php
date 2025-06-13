<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Обробка форми з 'settings'
    if (($_GET['page'] ?? '') === 'settings') {
        if (isset($_POST['bgcolor'])) {
            $_SESSION['bgcolor'] = $_POST['bgcolor'];
            header('Location: ?page=settings');
            exit;
        }
        if (isset($_POST['username'], $_POST['gender'])) {
            setcookie('username', trim($_POST['username']), time() + 60*60*24*30, "/");
            $gender = $_POST['gender'] === 'male' ? 'male' : 'female';
            setcookie('gender', $gender, time() + 60*60*24*30, "/");
            header('Location: ?page=settings');
            exit;
        }
    }
}
// Далі твій код роутера
$routes = [
    'home'   => ['file' => 'index',  'title' => 'Головна'],
    'form'   => ['file' => 'form',   'title' => 'Форма реєстрації'],
    'result' => ['file' => 'result', 'title' => 'Перегляд змінних'],
    'settings'  => ['file' => 'settings', 'title' => 'Налаштування']
];

$key   = $_GET['page'] ?? 'home';
$route = $routes[$key] ?? null;
$title = $route['title'] ?? '404 – Сторінка не знайдена';

include __DIR__ . '/inc/header.php';

if ($route) {
    include __DIR__ . '/pages/' . $route['file'] . '.php';
} else {
    http_response_code(404);
    echo '<h2>Сторінка не знайдена</h2>';
}

include __DIR__ . '/inc/footer.php';
