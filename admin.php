<?php
session_start();

require_once 'db_connect.php'; // Подключение к базе данных

// Проверить, существует ли идентификатор пользователя в сессии
if (!isset($_SESSION['user_id'])) {
    // Если идентификатора пользователя нет, перенаправить на страницу входа
    header('Location: login.php');
    exit();
}

// Обработка выхода пользователя
if (isset($_POST['logout'])) {
    session_destroy(); // Уничтожить все данные сессии
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1>
    <p>Welcome, administrator!</p>
    <form method="POST" action="">
        <button type="submit" name="logout">Logout</button>
    </form>
    <h2>Add a New Product</h2>
    <form method="POST" enctype="multipart/form-data">
    <label for="image">Image:</label>
    <input type="file" id="image" name="image">

    <label for="name">Pet name:</label>
    <input type="text" id="name" name="name">

    <label for="gem_value">gem_value:</label>
    <textarea id="gem_value" name="gem_value"></textarea>

    <label for="demand">demand:</label>
    <input type="text" id="demand" name="demand">

    <label for="value_change">value change:</label>
    <input type="text" id="value_change" name="value_change">

    <button type="submit" name="submit">Add product</button>
    </form>

<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $gem_value = $_POST['gem_value'];
        $demand = $_POST['demand'];
        $value_change = $_POST['value_change'];
        // Обработка загруженного файла
          $image = $_FILES['image']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        
        // Вставка данных в базу данных
        $stmt = $pdo->prepare('INSERT INTO products (name, gem_value, demand, value_change, image) VALUES (:name, :gem_value, :demand, :value_change, :image)');
        $stmt->execute(['name' => $name, 'gem_value' => $gem_value, 'demand' => $demand, 'value_change' => $value_change, 'image' => $image]);
        header('Location: admin.php');
        echo 'Данные добавлены!';
        exit();
    }
?>
</body>
</html>


