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
			console.log(data);
			data = JSON.parse(data);
			$("#first_name").val(data.first_name);
			$("#last_name").val(data.last_name);
			$("#email").val(data.login);
			$("#adress").val(data.adress);
			$("#city").val(data.city);
			$("#zipcode").val(data.zipcode);
		},
	});
});
