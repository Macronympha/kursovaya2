<?php
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
/*
 * Делаем константы для хранения данных о базе данных
 * HOST - адрес для подключения к БД
 * USER - логин для доступа к БД
 * PASSWORD - пароль для доступа к БД
 * DATABASE - название базы данных, к которой мы подключаемся
 */

define('HOST', 'localhost');
define('USER', 'macronympha');
define('PASSWORD', 'passw0rd');
define('DATABASE', 'pet_shop');

/*
 * Подключаемся к базе данных с помощью функции mysqli_connect()
 */

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

/*
 * Делаем проверку соединения
 * Если есть ошибки, останавливаем код и выводим сообщение с ошибкой
 */

if (!$connect) {
    die('Error connect to database!');
}
?>