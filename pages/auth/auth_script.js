$(function() {
	console.log("auth_script.js loaded");
	
	$('#formConnect input').keyup(function() {
		$('#error').empty();
		var empty = false;
		$('#formConnect input').each(function() {
			if ($(this).val() == '') {
				empty = true;
			}
			else{
				$(this).removeClass('is-invalid');
			}
		});
		if (empty) {
			$('#connectBtn').hide();
		} else {
			$('#connectBtn').show();
		}
	});

	$('#formConnect').submit(function(e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "auth_controller.php",
			data: {
				"action": "login",
				"username": $('#login').val(),
				"password": $('#password').val()
			},
			success: function(data) {
				console.log(data);
				if(data == "success"){
					$('#button_div').hide();
					$('#login_div').hide();
					$('#password_div').hide();
					$('#error').append('<div class="alert alert-success" role="alert">Vous êtes connecté !</div>');
					setTimeout(function(){ window.location.href = "/"; }, 1000);
				}else if(data == "password"){
					$('#error').append('<div class="alert alert-danger" role="alert">Mot de passe incorrect</div>');
				}else{
					$('#error').append('<div class="alert alert-danger" role="alert">Utilisateur inconnu</div>');
				}
			},
			error: function() {	
				$('#error').append('<div class="alert alert-danger" role="alert">Erreur lors de la récupération du json</div>');
			}
		});				
	});
});
