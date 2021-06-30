<?php

require_once 'config/connect.php';

function get_product_by_id( $id ){
	global $connection;

	$query = "SELECT * FROM `products_toy` WHERE `products_toy`.`id` = '$id'";
	$req = mysqli_query($connection, $query);
	$resp = mysqli_fetch_assoc($req);

	return $resp;
}