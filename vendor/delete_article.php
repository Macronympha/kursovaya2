<?php

//Удаление продукта

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Получаем ID продукта из адресной строки
 */

$articles_id = $_GET['id'];

/*
 * Делаем запрос на удаление строки из таблицы products
 */

mysqli_query($connect, "DELETE FROM `article` WHERE `article`.`id` = '$articles_id'");

/*
 * Переадресация на главную страницу
 */

header('Refresh: 1; url=../blog.php');