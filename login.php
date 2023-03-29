
<?php
session_start();

require_once('db_connect.php');


$error = false;
if (isset($_POST['username'], $_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Выполнить запрос к таблице `users`
        $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
        $stmt->execute([$username, $password]);
        $user = $stmt->fetch();

        // Проверить, существует ли пользователь с заданным именем пользователя и паролем
        if ($user) {
            // Если пользователь найден, сохранить его идентификатор в сессии
            $_SESSION['user_id'] = $user['id'];
            // Перенаправить пользователя на страницу админ-панели
            header('Location: admin.php');
            exit();
        } else {
            // Если пользователь не найден, вывести сообщение об ошибке
            echo 'Неверные учетные данные';
        }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>
    <?php if ($error) : ?>
        <p style="color: red;">Invalid username or password</p>
    <?php endif; ?>
    <form method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>

