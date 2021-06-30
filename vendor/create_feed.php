<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `products_feed` (`id`, `name`, `price`, `description`) VALUES (NULL, '$name', '$price', '$description')");

/*
 * Переадресация на главную страницу
 */

header('Refresh: 1; url=../shop.php');