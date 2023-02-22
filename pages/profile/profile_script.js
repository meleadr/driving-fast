$(function () {
	var id_user = sessionStorage.getItem("id_user");
	$.ajax({
		type: "POST",
		url: "profile_controller.php",
		data: {
			action: "getUserInfo",
			id: id_user,
		},
		success: function (data) {
			data = JSON.parse(data);
			$("#first_name").val(data.first_name);
			$("#last_name").val(data.last_name);
			$("#email").val(data.login);
			$("#adress").val(data.adress);
			$("#city").val(data.city);
			$("#zipcode").val(data.zipcode);
		},
	});

	// on click on the button
	$("#update").click(function (e) {
		e.preventDefault();
		$("#update").text("Enregistrer");
		$("#first_name").removeAttr("readonly");
		$("#last_name").removeAttr("readonly");
		// $("#email").removeAttr("readonly");
		$("#adress").removeAttr("readonly");
		$("#city").removeAttr("readonly");
		$("#zipcode").removeAttr("readonly");
		$("#update").click(function (e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: "profile_controller.php",
				data: {
					action: "updateUserInfo",
					id: id_user,
					first_name: $("#first_name").val(),
					last_name: $("#last_name").val(),
					// email: $("#email").val(),
					adress: $("#adress").val(),
					city: $("#city").val(),
					zipcode: $("#zipcode").val(),
				},
				success: function (data) {
					$("#update").text("Modifier");
					if (data == "success") {
						$("#first_name").attr("readonly", "readonly");
						$("#last_name").attr("readonly", "readonly");
						// $("#email").attr("readonly", "readonly");
						$("#adress").attr("readonly", "readonly");
						$("#city").attr("readonly", "readonly");
						$("#zipcode").attr("readonly", "readonly");
					} else {
						alert("Erreur lors de la mise à jour des informations");
					}
				},
			});
		});
	});
});
