<?php
session_start();
require_once('../../assets/SQL/user_manager.php');
$user_manager = new user_manager();

if(isset($_POST)):
	if(isset($_POST['action']) && $_POST['action'] == 'getUserInfo'):
		$user = $user_manager->get_user_by_id($_POST['id']);
		echo json_encode($user);
		die();
	elseif(isset($_POST['action']) && $_POST['action'] == 'updateUserInfo'):
		$user = $user_manager->update_user($_POST['id'], $_POST['first_name'], $_POST['last_name'], $_POST['adress'], $_POST['zipcode'], $_POST['city']);
		if($user):
			echo 'success';
		else:
			echo 'error';
		endif;
		die();
	endif;
endif;
?>