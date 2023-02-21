<?php
$page_title = 'Authentification';
$mvc = 'auth';
include_once('assets/includes/head.php'); ?>
<section id="logSection" class="col-sm-12">
	<form class="row g-3 was-validated" id="formConnect" novalidate>
		<div class="col-md-4" id="login_div">
			<label for="validationServerUsername" class="form-label">Login</label>
			<div class="input-group has-validation">
			<span class="input-group-text" id="inputGroupPrepend3">@</span>
			<input type="email" class="form-control is-invalid" id="login" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
			<div id="validationServerUsernameFeedback" class="invalid-feedback">
				Entrer votre login.
			</div>
			</div>
		</div>
		<div class="col-md-4" id="password_div">
			<label for="validationServer03" class="form-label">Mot de passe</label>
			<input type="password" class="form-control is-invalid" id="password" aria-describedby="validationServer03Feedback" required>
			<div id="validationServer03Feedback" class="invalid-feedback">
				Entrer votre mot de passe.
			</div>
		</div>
		<div class="col-12 text-center" id="button_div">
			<button class="btn btn-primary" type="submit" id="connectBtn">Se connecter</button>
		</div>
		<div class="col-12 text-center" id="error">
		</div>
	</form>
</section>
<?php include_once('./assets/includes/footer.php'); ?>