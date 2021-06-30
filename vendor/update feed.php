<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `products_feed` SET `name` = '$name', `price` = '$price', `description` = '$description' WHERE `products_feed`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Refresh: 1; url=../shop.php');
?>
