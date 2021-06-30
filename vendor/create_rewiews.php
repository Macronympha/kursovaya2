<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$FIO = $_POST['FIO'];
$number_phone = $_POST['number_phone'];
$email = $_POST['email'];
$reviews= $_POST['reviews'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `reviews` (`id`, `FIO`, `number_phone`, `email`, `reviews`) VALUES (NULL, '$FIO', '$number_phone', '$email', '$reviews')");

/*
 * Переадресация на главную страницу
 */

header('Refresh: 1; url=../puppy.php');