<?php
// Указываем директорию для сохранения файлов
$uploadDirectory = 'uploads/';

// Проверяем, был ли успешно загружен файл
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    // Получаем информацию о файле
    $fileName = basename($_FILES['photo']['name']);
    $uploadPath = $uploadDirectory . $fileName;

    // Перемещаем файл в указанную директорию
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath)) {
        echo 'Файл загружен!';
    } else {
        echo 'Ошибка при перемещении файла.';
    }
} else {
    echo 'Ошибка при загрузке файла.';
}
?>
