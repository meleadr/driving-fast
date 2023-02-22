<?php
session_start();
require_once('../../assets/SQL/product_manager.php');
$product_manager = new product_manager();

if(isset($_POST)):
	if(isset($_POST['action']) && $_POST['action'] == 'getProduct'):
		$products = $product_manager->get_product($_POST['id']);
		echo json_encode($products);
		die();
	elseif (isset($_POST['action']) && $_POST['action'] == 'getPrice'):
		$price = $product_manager->get_price($_POST['id']);
		echo $price['price'];
		die();
	endif;
endif;
		