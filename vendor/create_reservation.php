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
$number_phone = $_POST['number_phone'];
$color = $_POST['color'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$wishes= $_POST['wishes'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `reservation` (`id`, `name`, `number_phone`, `color`, `sex`, `email`, `wishes`) VALUES (NULL, '$name', '$number_phone', '$color', '$sex', '$email', '$wishes')");

/*
 * Переадресация на главную страницу
 */

header('Refresh: 1; url=../puppy.php');