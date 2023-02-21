<?php
session_start();
require_once('../../assets/SQL/user_manager.php');
$user_manager = new user_manager();

if(isset($_POST)):
	$username = $_POST['username'];
	$password = $_POST['password'];
	// check if user exists
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
		echo 'success-'.$user['id_user'];
	else:
		echo 'password-incorrect';
		session_destroy();
	endif;
	die();
endif;
