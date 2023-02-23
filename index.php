<?php
$page_title = 'Authentification';
$mvc = 'auth';
include_once('assets/includes/head.php'); ?>
<section id="logSection" class="col-sm-12">
	<form class="row g-3" id="formConnect" novalidate>
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
		<div class="col-12 text-center" id="register_div">
			<a href="#" id="registerNow">Pas encore inscrit ?</a>
		</div>
		<div class="col-12 text-center" id="button_div">
			<button class="btn btn-primary" type="submit" id="connectBtn">Se connecter</button>
		</div>
		<div class="col-12 text-center" id="error">
		</div>
	</form>
	<form class="row g-3" id="formRegister" novalidate>
		<div class="row">
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
				<input type="password" class="form-control is-invalid" id="password_register" aria-describedby="validationServer03Feedback" required>
				<div id="validationServer03Feedback" class="invalid-feedback">
					Entrer votre mot de passe.
				</div>
			</div>
			<div class="col-md-4" id="password_div">
				<label for="validationServer03" class="form-label">Confirmation du mot de passe</label>
				<input type="password" class="form-control is-invalid" id="password_confirm" aria-describedby="validationServer03Feedback" required>
				<div id="validationServer03Feedback" class="invalid-feedback">
					Entrer votre mot de passe.
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4" id="first_name_div">
				<label for="validationServer03" class="form-label">Prénom</label>
				<input type="text" class="form-control is-invalid" id="first_name" aria-describedby="validationServer03Feedback" required>
				<div id="validationServer03Feedback" class="invalid-feedback">
					Entrer votre prénom.
				</div>
			</div>
			<div class="col-md-4" id="last_name_div">
				<label for="validationServer03" class="form-label">Nom</label>
				<input type="text" class="form-control is-invalid" id="last_name">
				<div id="validationServer03Feedback" class="invalid-feedback">
					Entrer votre nom.
				</div>
			</div>
			</div>
			<div class="row">
			<div class="col-md-4" id="adress_div">
				<label for="validationServer03" class="form-label">Adresse</label>
				<input type="text" class="form-control is-invalid" id="adress">
				<div id="validationServer03Feedback" class="invalid-feedback">
					Entrer votre adresse.
				</div>
			</div>
			<div class="col-md-4" id="city_div">
				<label for="validationServer03" class="form-label">Ville</label>
				<input type="text" class="form-control is-invalid" id="city">
				<div id="validationServer03Feedback" class="invalid-feedback">
					Entrer votre ville.
				</div>
			</div>
			<div class="col-md-4" id="zip_code_div">
				<label for="validationServer03" class="form-label">Code postal</label>
				<input type="text" class="form-control is-invalid" id="zip_code">
				<div id="validationServer03Feedback" class="invalid-feedback">
					Entrer votre code postal.
				</div>
			</div>
		</div>
		<div class="col-12 text-center" id="button_div">
			<button class="btn btn-primary" type="submit" id="registerBtn">S'inscrire</button>
		</div>
		<div class="col-12 text-center" id="error_register">
		</div>
	</form>
</section>
<?php include_once('./assets/includes/footer.php'); ?>