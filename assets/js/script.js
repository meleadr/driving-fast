$(function () {
	$("#cart_quantity").text(sessionStorage.getItem("cart_quantity"));
	$("#formConnect input").keyup(function () {
		$("#error").empty();
		var empty = false;
		$("#formConnect input").each(function () {
			if ($(this).val() == "") {
				empty = true;
			} else {
				$(this).removeClass("is-invalid");
			}
		});
		if (empty) {
			$("#connectBtn").hide();
		} else {
			$("#connectBtn").show();
		}
	});

	$("#formConnect").submit(function (e) {
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "pages/auth/login.php",
			data: {
				action: "login",
				username: $("#login").val(),
				password: $("#password").val(),
			},
			success: function (data) {
				data = data.split("-");
				if (data[0] == "success") {
					$("#button_div").hide();
					$("#login_div").hide();
					$("#password_div").hide();
					$("#error").append(
						'<div class="alert alert-success" role="alert">Vous êtes connecté !</div>'
					);
					sessionStorage.setItem("id_user", data[1]);
					setTimeout(function () {
						window.location.href = "pages/landing/landing.php";
					}, 1000);
				} else if (data[0] == "password") {
					$("#error").append(
						'<div class="alert alert-danger" role="alert">Mot de passe incorrect</div>'
					);
				} else {
					$("#error").append(
						'<div class="alert alert-danger" role="alert">Utilisateur inconnu</div>'
					);
				}
			},
			error: function () {
				$("#error").append(
					'<div class="alert alert-danger" role="alert">Erreur lors de la tentative de connexion</div>'
				);
			},
		});
	});
});