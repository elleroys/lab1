<?php
$routes = [
    'home'   => ['file' => 'index',  'title' => 'Головна'],
    'form'   => ['file' => 'form',   'title' => 'Форма реєстрації'],
    'result' => ['file' => 'result', 'title' => 'Перегляд змінних']
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
