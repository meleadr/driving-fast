<?php $page_title = 'Profil';
$mvc = 'profile';
include_once('../../assets/includes/head.php');
include_once('../../assets/includes/header.php');
?>
<div id="profile" class="container">
	<div class="card">
		<div class="info">
			<span>Votre profil</span> <a id="update" class="btn btn-primary">Modifier</a>
		</div>
		<div class="forms">
			<div class="inputs">
				<span>Prenom</span> 
				<input type="text" id="first_name" name="first_name" readonly value="<?=$_SESSION['first_name']?>" />
			</div>
			<div class="inputs">
				<span>Nom</span> 
				<input type="text" id="last_name" name="last_name" readonly value="<?=$_SESSION['last_name']?>" />
			</div>
			<div class="inputs">
				<span>Email</span>
				<input type="text" id="email" name="email" readonly value="<?=$_SESSION['login']?>" />
			</div>
			<div class="inputs">
				<span>Rue</span>
				<input type="text" id="adress" name="adress" readonly value="<?=$_SESSION['adress']?>" />
			</div>
			<div class="inputs">
				<span>Code postal</span>
				<input type="text" id="zipcode" name="zipcode" readonly value="<?=$_SESSION['zipcode']?>" />
			</div>
			<div class="inputs">
				<span>Ville</span>
				<input type="text" id="city" name="city" readonly value="<?=$_SESSION['city']?>" />
			</div>
		</div>
	</div>
</div>
<?php
include_once('../../assets/includes/footer.php'); 
?>