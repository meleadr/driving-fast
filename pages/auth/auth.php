<?php 
$page_title = 'Authentification';
$mvc = 'auth';
require_once('../../assets/includes/header.php'); ?>
<section class="col-sm-12">
	<form class="row g-3 was-validated" id="formConnect" novalidate>
		<div class="col-md-4">
			<label for="validationServerUsername" class="form-label">Login</label>
			<div class="input-group has-validation">
			<span class="input-group-text" id="inputGroupPrepend3">@</span>
			<input type="email" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
			<div id="validationServerUsernameFeedback" class="invalid-feedback">
				Entrer votre login.
			</div>
			</div>
		</div>
		<div class="col-md-4">
			<label for="validationServer03" class="form-label">Mot de passe</label>
			<input type="password" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
			<div id="validationServer03Feedback" class="invalid-feedback">
				Entrer votre mot de passe.
			</div>
		</div>
		<div class="col-12">
			<button class="btn btn-primary" type="submit" id="connectBtn">Se connecter</button>
		</div>
	</form>
</section>
<?php require_once('../../assets/includes/footer.php'); ?>