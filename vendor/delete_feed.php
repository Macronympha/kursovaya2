<?php

//Удаление продукта

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Получаем ID продукта из адресной строки
 */

$id = $_GET['id'];

/*
 * Делаем запрос на удаление строки из таблицы products
 */

mysqli_query($connect, "DELETE FROM `products_feed` WHERE `products_feed`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */

header('Refresh: 1; url=../shop.php');