<?php
session_start();
require_once('../../assets/SQL/user_manager.php');
$user_manager = new user_manager();

if(isset($_POST)):
	if(isset($_POST['action']) && $_POST['action'] == 'getUserInfo'):
		$user = $user_manager->get_user_by_id($_POST['id']);
		echo json_encode($user);
		die();
	endif;
endif;
		