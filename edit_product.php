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
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

        <div class="hugepets__info-img hugepets__info-img1"><img src="uploads/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>"> 
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
      </div>

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
