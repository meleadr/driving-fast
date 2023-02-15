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
});
