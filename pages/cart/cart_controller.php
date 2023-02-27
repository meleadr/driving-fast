<?php
session_start();
require_once('../../assets/SQL/product_manager.php');
$product_manager = new product_manager();

if(isset($_POST)):
	if(isset($_POST['action']) && $_POST['action'] == 'createOrder'):
		$cart = $_POST['cart'];
		foreach ($cart as $productInCart) {
			$product = $product_manager->get_product($productInCart['id']);
			if($product['stock'] < $productInCart['quantity']){
				$stock = $product['stock'];
				$model = $product['model'];
				echo "$model  n'est plus disponible en quantité suffisante (stock : $stock )";
				die();
			}else{
				$product_manager->create_order($productInCart['id'], $_POST['id_user'], $productInCart['quantity']);
				$product_manager->update_stock($productInCart['id'], $productInCart['quantity']);
			}
		}
		echo "success";
		die();
	endif;
endif;
		