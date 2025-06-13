<?php
// Збереження кольору у сесію
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

// Отримання поточних значень
$bgcolor = $_SESSION['bgcolor'] ?? '#ffffff';
$username = $_COOKIE['username'] ?? '';
$gender = $_COOKIE['gender'] ?? '';
?>


<form method="post" action="?page=settings">
    <label for="bgcolor">Колір фону:</label>
    <input type="color" id="bgcolor" name="bgcolor" value="<?= htmlspecialchars($bgcolor) ?>" required>
    <p>
    <button type="submit">Зберегти колір</button>
</form>

<form method="post" action="?page=settings" style="margin-top: 20px;">
    <label for="username">Ім'я:</label>
    <input type="text" id="username" name="username" value="<?= htmlspecialchars($username) ?>" required>
    <label for="gender">Стать:</label>
    <select id="gender" name="gender" required>
        <option value="">Виберіть стать</option>
        <option value="male" <?= $gender === 'male' ? 'selected' : '' ?>>Чоловіча</option>
        <option value="female" <?= $gender === 'female' ? 'selected' : '' ?>>Жіноча</option>
    </select>
    <p>
    <button type="submit">Зберегти ім'я та стать</button>
</form>
