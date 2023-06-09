<?php
require_once 'db_connect.php';

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

    // Загрузка нового изображения, если оно было выбрано
    if (!empty($_FILES['image']['name'])) {
        $target_dir = 'uploads/';
        $target_file = $target_dir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        $image = basename($_FILES['image']['name']);
    } else {
        $image = $product['image'];
    }

    // Обновление данных продукта в базе данных
    $stmt = $pdo->prepare('UPDATE products SET name = ?, gem_value = ?, demand = ?, value_change = ?, image = ? WHERE id = ?');
    $stmt->execute([$name, $gem_value, $demand, $value_change, $image, $id]);
    header('Location: updatepets.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pet</title>
    <link rel="stylesheet" href="css/edit_product.css">
</head>
<body>
    <h1 class="page-title">Рекдактировать</h1>
    <form class="product-form" method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">

        <div class="product-image">
            <img src="uploads/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
            <label for="image">Выбор фото:</label>
            <input type="file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="name">Имя питомца:</label>
            <input type="text" id="name" name="name" value="<?= $product['name'] ?>">
        </div>

        <div class="form-group">
            <label for="gem_value">Цена в гемах :</label>
            <input type="text" id="gem_value" name="gem_value" value="<?= $product['gem_value'] ?>">
        </div>

        <div class="form-group">
            <label for="demand">Спрос:</label>
            <input type="text" id="demand" name="demand" value="<?= $product['demand'] ?>">
        </div>

        <div class="form-group">
            <label for="value_change">Цена изменилась:</label>
            <input type="text" id="value_change" name="value_change" value="<?= $product['value_change'] ?>">
        </div>

        <button type="submit" name="submit" class="btn-submit">Сохранить</button>
    </form>

</body>
</html>
