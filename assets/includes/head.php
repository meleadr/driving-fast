<?php
session_start();
if(!isset($_SESSION['id_user']) && $mvc != 'auth') {
	header('Location: ../../index.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php 
	if($mvc == 'auth'){
		require_once('assets/includes/config.php');
	}else{
		require_once('../../assets/includes/config.php');
	}
	?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- LINK FAVICON -->
	<link rel="icon" href="<?=($mvc == 'auth') ? 'favicon.ico' : '../../favicon.ico';?>">

	<!-- LINK CSS AND JS FOR BOOTSTRAP -->
	<link rel="stylesheet" href="<?=($mvc == 'auth') ? 'assets/css/bootstrap.css' : '../../assets/css/bootstrap.css';?>">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

	<!-- LINK CSS AND JS FOR JQUERY -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- LINK CSS AND JS GLOBAL -->
	<link rel="stylesheet" href="<?=($mvc == 'auth') ? 'assets/css/styles.css' : '../../assets/css/styles.css';?>">
	<script src="<?=($mvc == 'auth') ? 'assets/js/script.js' : '../../assets/js/script.js';?>"></script>

	<!-- LINK CSS AND JS FOR MVC -->
	<link rel="stylesheet" href="<?=($mvc == 'auth') ? 'pages/auth/auth_style.css' : $mvc.'_style.css';?>">
	<script src="<?=($mvc == 'auth') ? 'pages/auth/auth_script.js' : $mvc.'_script.js';?>"></script>
	<title><?=$site_name?> - <?=$page_title?></title>
</head>
<body>