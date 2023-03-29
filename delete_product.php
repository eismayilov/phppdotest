<?php
session_start();

require_once 'db_connect.php';

// Проверить, существует ли идентификатор пользователя в сессии
if (!isset($_SESSION['user_id'])) {
    // Если идентификатора пользователя нет, перенаправить на страницу входа
    header('Location: login.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare('DELETE FROM products WHERE id = :id');
    $stmt->execute(['id' => $id]);
    echo "Продукт с ID $id удален!";
} else {
    echo "ID продукта не был указан.";
}
?>
