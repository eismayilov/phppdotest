<?php
require_once '../db_connect.php';

// Получение данных о продукте из базы данных
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('SELECT * FROM update_pets WHERE id = ?');
    $stmt->execute([$id]);
    $update = $stmt->fetch(PDO::FETCH_ASSOC);
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
        $target_dir = '../uploads/';
        $target_file = $target_dir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        $image = basename($_FILES['image']['name']);
    } else {
        $image = $update['image'];
    }

    // Обновление данных продукта в базе данных
    $stmt = $pdo->prepare('UPDATE update_pets SET name = ?, gem_value = ?, demand = ?, value_change = ?, image = ? WHERE id = ?');
    $stmt->execute([$name, $gem_value, $demand, $value_change, $image, $id]);
    header('Location: ../updatepets.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pet</title>
    <link rel="stylesheet" href="../css/edit_product.css">
</head>
<body>
    <h1 class="page-title">Рекдактировать</h1>
    <form class="update-form" method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $update['id'] ?>">

        <div class="update-image">
            <img src="../uploads/<?= $update['image'] ?>" alt="<?= $update['name'] ?>">
            <label for="image">Выбор фото:</label>
            <input type="file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="name">Имя питомца:</label>
            <input type="text" id="name" name="name" value="<?= $update['name'] ?>">
        </div>

        <div class="form-group">
            <label for="gem_value">Цена в гемах :</label>
            <input type="text" id="gem_value" name="gem_value" value="<?= $update['gem_value'] ?>">
        </div>

        <div class="form-group">
            <label for="demand">Спрос:</label>
            <input type="text" id="demand" name="demand" value="<?= $update['demand'] ?>">
        </div>

        <div class="form-group">
            <label for="value_change">Цена изменилась:</label>
            <input type="text" id="value_change" name="value_change" value="<?= $update['value_change'] ?>">
        </div>

        <button type="submit" name="submit" class="btn-submit">Сохранить</button>
    </form>

</body>
</html>
