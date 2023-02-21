$(function () {
	var url = new URL(window.location.href);
	var id = url.searchParams.get("id");
	$.ajax({
		type: "POST",
		url: "product_controller.php",
		data: {
			action: "getProduct",
			id: id,
		},
		success: function (data) {
			var product = JSON.parse(data);
			product.price = product.price
				.toString()
				.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
			$("#name").append(product.model);
			$("#price").append(product.price + "€");
			$("#description").append(product.description);
			$("#main_product_image").attr("src", product.path_image);
		},
		error: function () {
			$("section").append("<h1>Erreur lors du chargement de l'article</h1>");
		},
	});

	$("#plus").click(function () {
		var quantity = $("#quantity").val();
		quantity++;
		$("#quantity").val(quantity);
	});

	$("#minus").click(function () {
		var quantity = $("#quantity").val();
		if (quantity > 1) {
			quantity--;
			$("#quantity").val(quantity);
		}
	});

	$("#add_to_cart").click(function () {
		var cookies = document.cookie.split(";");
		var product_already_in_cart = false;
		var product_quantity = 0;

		$.each(cookies, function (index, cookie) {
			var cookie_name = cookie.split("=")[0].trim();
			if (cookie_name == "cart_" + sessionStorage.getItem("id_user")) {
				var cart = JSON.parse(cookie.split("=")[1]);
				$.each(cart, function (index, product) {
					if (product.id == id) {
						product_already_in_cart = true;
						product_quantity = product.quantity;
					}
				});
			}
		});

		if (product_already_in_cart) {
			$.each(cookies, function (index, cookie) {
				var cookie_name = cookie.split("=")[0].trim();
				if (cookie_name == "cart_" + sessionStorage.getItem("id_user")) {
					var cart = JSON.parse(cookie.split("=")[1]);
					$.each(cart, function (index, product) {
						if (product.id == id) {
							product.quantity =
								parseInt(product_quantity) + parseInt($("#quantity").val());
						}
					});
					document.cookie =
						"cart_" +
						sessionStorage.getItem("id_user") +
						"=" +
						JSON.stringify(cart) +
						"; path=/";
				}
			});
		} else {
			var product = {
				id: id,
				quantity: $("#quantity").val(),
			};
			var cart = [];
			cart.push(product);

			$.each(cookies, function (index, cookie) {
				var cookie_name = cookie.split("=")[0].trim();
				if (cookie_name == "cart_" + sessionStorage.getItem("id_user")) {
					var actual_cart = JSON.parse(cookie.split("=")[1]);
					$.each(actual_cart, function (index, product) {
						cart.push(product);
					});
				}
			});

			document.cookie =
				"cart_" +
				sessionStorage.getItem("id_user") +
				"=" +
				JSON.stringify(cart) +
				"; path=/";
		}

		// update the cart icon in the header with the new quantity
		var cart_quantity = 0;
		$.each(cookies, function (index, cookie) {
			var cookie_name = cookie.split("=")[0].trim();
			if (cookie_name == "cart_" + sessionStorage.getItem("id_user")) {
				var cart = JSON.parse(cookie.split("=")[1]);
				$.each(cart, function (index, product) {
					cart_quantity += parseInt(product.quantity);
					sessionStorage.setItem("cart_quantity", cart_quantity);
				});
			}
		});

		$("#cart_quantity").text(cart_quantity);
	});
});
