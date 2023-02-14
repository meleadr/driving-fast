<?php
class product_manager {

	private $db;

	public function __construct() {
		$this->db = new PDO('mysql:host=localhost;dbname=driving_fast', 'root', 'root');
	}

	public function get_products() {
		$sql = "SELECT * FROM cars";
		$req = $this->db->prepare($sql);
		$req->execute();
		$products = $req->fetchAll(PDO::FETCH_ASSOC);
		return $products;
	}
	
}