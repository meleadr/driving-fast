<?php
session_start();
require_once('../../assets/SQL/product_manager.php');
$product_manager = new product_manager();

if(isset($_POST)):
	if(isset($_POST['action']) && $_POST['action'] == 'getProducts'):
		$product = $product_manager->get_products();
		echo json_encode($product);
		die();
	endif;
endif;
		