<?php
$upload_dir = 'uploads';

// Проверка существования папки uploads
if (!is_dir($upload_dir)) {
    echo "Папка {$upload_dir} не существует!";
    exit();
}

// Проверка прав на запись в папку uploads
if (!is_writable($upload_dir)) {
    echo "Нет прав на запись в папку {$upload_dir}!";
    exit();
}

echo "Папка загрузки настроена корректно!";
?>
