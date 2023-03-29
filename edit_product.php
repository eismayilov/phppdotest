<?php
session_start();

require_once 'db_connect.php';

// Проверить, существует ли идентификатор пользователя в сессии
if (!isset($_SESSION['user_id'])) {
    // Если идентификатора пользователя нет, перенаправить на страницу входа
    header('Location: login.php');
    exit();
}



// Получение данных о продукте из базы данных
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Обработка формы для обновления данных продукта
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gem_value = $_POST['gem_value'];
    $demand = $_POST['demand'];
    $value_change = $_POST['value_change'];

    // Обновление данных продукта в базе данных
    $stmt = $pdo->prepare('UPDATE products SET name = ?, gem_value = ?, demand = ?, value_change = ? WHERE id = ?');
    $stmt->execute([$name, $gem_value, $demand, $value_change, $id]);
    header('Location: updatepets.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

        <label for="name">Pet name:</label>
        <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>">

        <label for="gem_value">Gem value:</label>
        <input type="text" id="gem_value" name="gem_value" value="<?php echo $product['gem_value']; ?>">

        <label for="demand">Demand:</label>
        <input type="text" id="demand" name="demand" value="<?php echo $product['demand']; ?>">

        <label for="value_change">Value change:</label>
        <input type="text" id="value_change" name="value_change" value="<?php echo $product['value_change']; ?>">

        <button type="submit" name="submit">Save Changes</button>
    </form>
</body>
</html>
