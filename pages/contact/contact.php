<?php 
$page_title = 'Contact'; 
$mvc = 'contact';
require_once('../../assets/includes/header.php');
?>
<div class="mt-5 conatiner">
	<div class="text-center">
		<h3 class="text-primary">Comment pouvons-nous vous aider ?</h3>
		<p class="lead">Contactez-nous via ce formulaire</p>
	</div>
	<div class=" d-flex align-items-center justify-content-center">
		<div class="bg-white col-md-4">
			<div class="p-4 rounded shadow-md">
				<div>
					<label for="name" class="form-label">Votre nom</label>
					<input type="text" name="name" class="form-control" placeholder="Your Name" required>
				</div>
				<div class="mt-3">
					<label for="email" class="form-label">Votre mail</label>
					<input type="text" name="email" class="form-control" placeholder="Your Email" required>
				</div class="mt-3">
				<div class="mt-3">
					<label for="subject" class="form-label">Sujet</label>
					<input type="text" name="subject" class="form-control" placeholder="Subject" required>
				</div>
				<div class="mt-3 mb-3">
					<label for="message" class="form-label">Message</label>
					<textarea name="message" cols="20" rows="6" class="form-control"
						placeholder="message"></textarea>
				</div>
				<button class="btn btn-primary">
					Envoyer
				</button>
			</div>
		</div>
	</div>
</div>
<?php
require_once('../../assets/includes/footer.php'); 
?>