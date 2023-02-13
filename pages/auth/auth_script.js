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
			type: "GET",
			url: "../../assets/json/users.json",
			dataType: "json",
			success: function(data) {
				var userExists = false;
				var passwordCorrect = false;
				$.each(data.users, function(key, user) {
					if (user.email == $('#login').val()) {
						userExists = true;
						if (user.password == $('#password').val()) {
							passwordCorrect = true;
							document.cookie = "id_user=" + user.id + "; path=/";
							document.cookie = "first_name=" + user.first_name + "; path=/";
							document.cookie = "last_name=" + user.last_name + "; path=/";
							document.cookie = "email=" + user.email + "; path=/";
						}
					}
				});
				$('#error').empty();
				if (userExists && passwordCorrect) {
					$('#button_div').hide();
					$('#login_div').hide();
					$('#password_div').hide();
					$('#error').append('<div class="alert alert-success" role="alert">Vous êtes connecté !</div>');
					setTimeout(function(){ window.location.href = "/"; }, 1000);
				}else if(userExists && !passwordCorrect){
					$('#error').append('<div class="alert alert-danger" role="alert">Mot de passe incorrect</div>');
				}else{
					$('#error').append('<div class="alert alert-danger" role="alert">Utilisateur inconnu</div>');
				}
			},
			error: function(data) {	
				$('#error').append('<div class="alert alert-danger" role="alert">Erreur lors de la récupération du json</div>');
			}
		});				
	});
});
