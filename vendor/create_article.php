<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$article_name = $_POST['article_name'];
$article_description = $_POST['article_description'];
$article = $_POST['article'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `article` (`id`, `article_name`, `article`, `article_description`) VALUES (NULL, '$article_name', '$article', '$article_description')");

/*
 * Переадресация на главную страницу
 */

header('Refresh: 1; url=../blog.php');