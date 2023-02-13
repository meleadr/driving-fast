<!DOCTYPE html>
<html lang="fr">
<head>
	<?php 
	if($page_title == 'Accueil'){
		require_once('assets/includes/config.php');
	}else{
		require_once('../../assets/includes/config.php');
	}
	?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- LINK FAVICON -->
	<link rel="icon" href="<?=($page_title == 'Accueil') ? 'favicon.ico' : '../../favicon.ico';?>">

	<!-- LINK CSS AND JS FOR BOOTSTRAP -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

	<!-- LINK CSS AND JS FOR JQUERY -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- LINK CSS AND JS GLOBAL -->
	<link rel="stylesheet" href="<?=($page_title == 'Accueil') ? 'assets/css/styles.css' : '../../assets/css/styles.css';?>">
	<script src="<?=($page_title == 'Accueil') ? 'assets/js/script.js' : '../../assets/js/script.js';?>"></script>
	
	<!-- LINK CSS AND JS FOR MVC -->
	<link rel="stylesheet" href="<?=$mvc?>_style.css">
	<script src="<?=$mvc?>_script.js"></script>
	<title><?=$site_name?> - <?=$page_title?></title>
</head>
<body>
<head>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?=($page_title == 'Accueil') ? 'index.php' : '../../index.php';?>"><?php echo $site_name; ?></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="/index.php"><i class="bi bi-house"></i> Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=($page_title == 'Accueil') ? 'pages/about/about.php' : '../about/about.php';?>"><i class="bi bi-info-circle"></i> A propos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=($page_title == 'Accueil') ? 'pages/contact/contact.php' : '../contact/contact.php';?>"><i class="bi bi-telephone"></i> Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=($page_title == 'Accueil') ? 'pages/cart/cart.php' : '../cart/cart.php';?>"><i class="bi bi-cart"></i> Panier</a>
					</li>
					<?php if(isset($_COOKIE['id_user'])):?>
					<li class="nav-item">
						<a class="nav-link" href="<?=($page_title == 'Accueil') ? 'pages/profil/profil.php' : '../profil/profil.php';?>"><i class="bi bi-user"></i> <?=$_SESSION['prenom']?></a>
					</li>
					<?php endif;?>
					<?php if(!isset($_COOKIE['id_user'])):?>
					<li class="nav-item">
						<a class="nav-link" href="<?=($page_title == 'Accueil') ? 'pages/auth/auth.php' : '../auth/auth.php';?>"><i class="bi bi-box-arrow-in-right"></i> Connexion</a>
					</li>
					<?php endif;?>
				</ul>
			</div>
		</div>
	</nav>
</head>