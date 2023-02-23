$(function () {
	var id_user = sessionStorage.getItem("id_user");
	var url = new URL(window.location.href);
	var id = url.searchParams.get("id");
	var price = 0;
	$.ajax({
		type: "POST",
		url: "product_controller.php",
		data: {
			action: "getProduct",
			id: id,
		},
		success: function (data) {
			var product = JSON.parse(data);
			price = product.price;
			product.price = formatPrice(product.price);
			$("#name").append(product.brand + " " + product.model);
			$("#price").append(product.price);
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
		setCartQuantityProduct(id_user, id, parseInt($("#quantity").val()));
		setCartQuantity(id_user);
		$("#popup_image").attr("src", $("#main_product_image").attr("src"));
		$("#popup_name").text($("#name").text());
		var total = price * parseInt($("#quantity").val());
		total = formatPrice(total);
		$("#popup_price").text(total);
		$(".popup").css("display", "block");
		$("#continue_shopping").click(function () {
			$(".popup").css("display", "none");
		});
	});
});
