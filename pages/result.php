<?php
/**
 * Акуратно виводимо $_GET, $_POST, $_SERVER без var_dump.
 */
function showTable(string $caption, array $data): void {
    echo "<h2>$caption</h2>";
    if (empty($data)) {
        echo '<p><em>Порожньо</em></p>';
        return;
    }
    echo '<table><thead><tr><th>Ключ</th><th>Значення</th></tr></thead><tbody>';
    foreach ($data as $k => $v) {
        $v = is_array($v) ? json_encode($v, JSON_UNESCAPED_UNICODE) : $v;
        echo '<tr><td>' . htmlspecialchars($k) . '</td><td>' .
            htmlspecialchars((string)$v) . '</td></tr>';
    }
    echo '</tbody></table>';
}

showTable('$_GET',    $_GET);
showTable('$_POST',   $_POST);
showTable('$_SERVER', $_SERVER);
