<?php
//1. Задание 1: Форма для отправки отзыва о товаре
//Создайте форму с полями: имя, отзыв (textarea), рейтинг (1-5).
//Отправляйте данные методом POST .
//Реализуйте обработку данных, проверяя метод запроса ( POST ).
//Выводите результат с введенными пользователем данными.
//Подсказка:
//Используйте массив $_POST для получения данных:
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//$name = $_POST['name'];
//// Дальнейшая обработка данных
//}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $review = $_POST['review'];
    $rating = $_POST['rating'];
    echo "Имя: {$name}<br>";
    echo "Отзыв: {$review}<br>";
    echo "Рейтинг: {$rating}<br>";
    }
?>
