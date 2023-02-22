$(function () {
	$.ajax({
		type: "POST",
		url: "shop_controller.php",
		data: {
			action: "getProducts",
		},
		success: function (data) {
			var products = JSON.parse(data);
			// foreach product
			$.each(products, function (index, product) {
				product.price = formatPrice(product.price);
				product.description = product.description.substring(0, 100) + "...";

				$("#products").append(
					'<div class="card" style="width: 18rem;">' +
						'<img src="' +
						product.path_image +
						'" class="card-img-top" alt="' +
						product.model +
						'">' +
						'<div class="card-body">' +
						'<h5 class="card-title">' +
						product.model +
						"</h5>" +
						'<p class="card-text">' +
						product.description +
						"</p>" +
						'<p class="card-text">' +
						product.price +
						"</p>" +
						'<a href="../product/product.php?id=' +
						product.id_car +
						'" class="btn btn-primary">Voir le produit</a>' +
						"</div>" +
						"</div>"
				);
			});
		},
		error: function () {
			console.log("error");
		},
	});
});
