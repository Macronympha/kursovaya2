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
$article_name = $_POST['article_name'];
$article_description = $_POST['article_description'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `article` SET `article_name` = '$article_name',  `article_description` = '$article_description' WHERE `article`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Refresh: 1; url=../blog.php');
?>
