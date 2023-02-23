<?php
session_start();
require_once('../../assets/SQL/user_manager.php');
$user_manager = new user_manager();

if(isset($_POST)):
	if($_POST['action'] == 'login'):
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(!$user_manager->user_exists($username)):
			echo 'user does not exist';
			session_destroy();
			die();
		endif;

		$user = $user_manager->get_user($username, $password);
		if($user):
			$_SESSION['id_user'] = $user['id_user'];
			$_SESSION['login'] = $user['login'];
			$_SESSION['password'] = $user['password'];
			$_SESSION['first_name'] = $user['first_name'];
			$_SESSION['last_name'] = $user['last_name'];
			$_SESSION['adress'] = $user['adress'];
			$_SESSION['zipcode'] = $user['zipcode'];
			$_SESSION['city'] = $user['city'];
			echo 'success-'.$user['id_user'];
		else:
			echo 'password-incorrect';
			session_destroy();
		endif;
		die();
	elseif($_POST['action'] == 'register'):
		$username = $_POST['username'];
		$password = $_POST['password'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$adress = $_POST['adress'];
		$zipcode = $_POST['zipcode'];
		$city = $_POST['city'];
		if($user_manager->user_exists($username)):
			echo 'user-exists';
			session_destroy();
			die();
		endif;
		$user_manager->create_user($username, $password, $first_name, $last_name, $adress, $zipcode, $city);
		$user = $user_manager->get_user($username, $password);
		$_SESSION['id_user'] = $user['id_user'];
		$_SESSION['login'] = $user['login'];
		$_SESSION['password'] = $user['password'];
		$_SESSION['first_name'] = $user['first_name'];
		$_SESSION['last_name'] = $user['last_name'];
		$_SESSION['adress'] = $user['adress'];
		$_SESSION['zipcode'] = $user['zipcode'];
		$_SESSION['city'] = $user['city'];
		echo 'success-'.$user['id_user'];
		die();
	endif;
endif;
