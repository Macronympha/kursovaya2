<?php

require_once 'config/connect.php';

function get_product_by_id( $id ){
	global $connect;

	$query = "SELECT * FROM `products_toy` WHERE `products_toy`.`id` = '$id'";
	$req = mysqli_query($connect, $query);
	$resp = mysqli_fetch_assoc($req);

	return $resp;
}