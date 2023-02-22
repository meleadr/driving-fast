<?php
class product_manager {

	private $db;

	public function __construct() {
		$this->db = new PDO('mysql:host=localhost;dbname=driving_fast', 'root', 'root');
	}

	public function get_products() {
		$sql = "SELECT * FROM cars
		JOIN categories ON cars.category = categories.id_category";
		$req = $this->db->prepare($sql);
		$req->execute();
		$products = $req->fetchAll(PDO::FETCH_ASSOC);
		return $products;
	}

	public function get_product($id) {
		$sql = "SELECT * FROM cars WHERE id_car = :id";
		$req = $this->db->prepare($sql);
		$req->execute(array(
			':id' => $id
		));
		$product = $req->fetch(PDO::FETCH_ASSOC);
		return $product;
	}

	public function get_price($id)
	{
		$sql = "SELECT price FROM cars WHERE id_car = :id";
		$req = $this->db->prepare($sql);
		$req->execute(array(
			':id' => $id
		));
		$price = $req->fetch(PDO::FETCH_ASSOC);
		return $price;
	}

	public function get_categories() {
		$sql = "SELECT * FROM categories";
		$req = $this->db->prepare($sql);
		$req->execute();
		$categories = $req->fetchAll(PDO::FETCH_ASSOC);
		return $categories;
	}
	
}