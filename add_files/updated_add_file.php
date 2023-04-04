<?php 
session_start();

require_once '../db_connect.php'; // Подключение к базе данных

// Проверить, существует ли идентификатор пользователя в сессии
if (!isset($_SESSION['user_id'])) {
    // Если идентификатора пользователя нет, перенаправить на страницу входа
    header('Location: ../login.php');
    exit();
}

// Обработка выхода пользователя
if (isset($_POST['logout'])) {
    session_destroy(); // Уничтожить все данные сессии
    header('Location: ../login.php');
    exit();
}

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $gem_value = $_POST['gem_value'];
  $demand = $_POST['demand'];
  $value_change = $_POST['value_change'];
  // Обработка загруженного файла
  $image = $_FILES['image']['name'];
  $target_dir = "../uploads/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);
  move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

  // Вставка данных в базу данных
  $stmt = $pdo->prepare('INSERT INTO update_pets (name, gem_value, demand, value_change, image) VALUES (:name, :gem_value, :demand, :value_change, :image)');
  $stmt->execute(['name' => $name, 'gem_value' => $gem_value, 'demand' => $demand, 'value_change' => $value_change, 'image' => $image]);
  var_dump($stmt->errorInfo()); // отладочная информация
  header('Location: updated_add_file.php');
  echo 'файлы добавлены';
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Мой сайт</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../css/add_file.css">
</head>
<body>  
        <?php
            $title_text = 'Добавить новых петов из обновления!';
        ?>
                <?php
            $check_page = '<a href="../updated_pets" class="check-page" target="_blank">Проверить</a>';
        ?>
        <?php include '../add_file.php'; ?>

<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="../assets/libs/js/main-js.js"></script>
</body>
</html>