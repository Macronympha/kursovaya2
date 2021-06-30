<?php

require_once '../config/connect.php';

$_SESSION['cart_list'] = array_filter($_SESSION['cart_list'], function ($item) {
    return $item['id'] !== $_GET['id'];
});

header('Location: /basket.php');