$(function () {
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
			$("#register_div").show();
		} else {
			$("#connectBtn").show();
			$("#register_div").hide();
		}
	});

	$("#formRegister input").keyup(function () {
		$("#error_register").empty();
		var empty = false;
		$("#formRegister input").each(function () {
			if ($(this).val() == "") {
				empty = true;
			} else {
				$(this).removeClass("is-invalid");
			}
		});
		if (empty) {
			$("#connectBtn").hide();
			$("#register_div").show();
		} else {
			$("#connectBtn").show();
			$("#register_div").hide();
		}
	});

	$("#registerNow").click(function () {
		$("#formConnect").hide();
		$("#formRegister").show();
	});

	$("#backToLogin").click(function () {
		$("#formConnect").show();
		$("#formRegister").hide();
	});

	$("#formRegister").submit(function (e) {
		e.preventDefault();
		if ($("#password_register").val() != $("#password_confirm").val()) {
			$("#error_register").append(
				'<div class="alert alert-danger" role="alert">Les mots de passe ne correspondent pas</div>'
			);
			$("#password_register").val("");
			$("#password_confirm").val("");
			return;
		}
		$("#password").val(
			CryptoJS.SHA256($("#password").val()).toString(CryptoJS.enc.Hex)
		);
		$.ajax({
			type: "POST",
			url: "pages/auth/login.php",
			data: {
				action: "register",
				username: $("#login_register").val(),
				password: $("#password_register").val(),
				first_name: $("#first_name").val(),
				last_name: $("#last_name").val(),
				adress: $("#adress").val(),
				city: $("#city").val(),
				zipcode: $("#zip_code").val(),
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
				} else {
					$("#error").append(
						'<div class="alert alert-danger" role="alert">Utilisateur déjà existant</div>'
					);
					$("#login").val("");
					$("#password_register").val("");
					$("#password_confirm").val("");
				}
			},
			error: function () {
				$("#error").append(
					'<div class="alert alert-danger" role="alert">Erreur lors de la tentative de connexion</div>'
				);
			},
		});
	});

	$("#formConnect").submit(function (e) {
		e.preventDefault();
		$("#password").val(
			CryptoJS.SHA256($("#password").val()).toString(CryptoJS.enc.Hex)
		);
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
					$("#password").val("");
				} else {
					$("#error").append(
						'<div class="alert alert-danger" role="alert">Utilisateur inconnu</div>'
					);
					$("#login").val("");
					$("#password").val("");
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
