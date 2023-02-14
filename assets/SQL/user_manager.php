<?php
class user_manager {

	private $db;

	public function __construct() {
		$this->db = new PDO('mysql:host=localhost;dbname=driving_fast', 'root', 'root');
	}

	public function user_exists($username) {
		$sql = "SELECT * FROM users WHERE username = :username";
		$req = $this->db->prepare($sql);
		$req->execute(array(
			'username' => $username
		));
		$user = $req->fetch(PDO::FETCH_ASSOC);
		if($user):
			return true;
		else:
			return false;
		endif;
	}

	public function get_user_by_id($id_user) {
		$sql = "SELECT * FROM users WHERE id_user = :id_user";
		$req = $this->db->prepare($sql);
		$req->execute(array(
			'id' => $id_user
		));
		$user = $req->fetch(PDO::FETCH_ASSOC);
		return $user;
	}

	public function get_user($username, $password) {
		$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
		$req = $this->db->prepare($sql);
		$req->execute(array(
			'username' => $username,
			'password' => $password
		));
		$user = $req->fetch(PDO::FETCH_ASSOC);
		return $user;
	}
	
}