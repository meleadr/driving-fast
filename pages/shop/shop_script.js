$(function () {
	$.ajax({
		type: "POST",
		url: "shop_controller.php",
		data: {
			action: "getProducts",
		},
		success: function (data) {
			var products = JSON.parse(data);
			$.each(products, function (index, product) {
				price = formatPrice(product.price);
				product.description = product.description.substring(0, 100) + "...";

				$("#products").append(
					'<div class="card">' +
						'<p id="id" style="display: none;">' +
						product.id_car +
						"</p>" +
						'<img src="' +
						product.path_image +
						'" class="card-img-top" alt="' +
						product.model +
						'">' +
						'<div class="card-body">' +
						'<h5 id="name" class="card-title">' +
						product.brand +
						" " +
						product.model +
						"</h5>" +
						'<p id="desc" class="card-text">' +
						product.description +
						"</p>" +
						'<p id="category" class="card-text">' +
						product.name +
						"</p>" +
						'<p id="price" class="card-text">' +
						price +
						"</p>" +
						"<p id='nonFormatPrice' hidden>" +
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

	$.ajax({
		type: "POST",
		url: "shop_controller.php",
		data: {
			action: "getCategories",
		},
		success: function (data) {
			var categories = JSON.parse(data);
			$.each(categories, function (index, category) {
				$(".categories select").append(
					'<option value="' + category.name + '">' + category.name + "</option>"
				);
			});
		},
		error: function () {
			console.log("error");
		},
	});

	$(".categories select, #min, #max").change(function () {
		filtre();
	});

	$(".tri select").change(function () {
		var value = $(this).val();
		var products = $("#products .card");
		if (value == "price_low_high") {
			products.sort(function (a, b) {
				var priceA = $(a).find("#nonFormatPrice").text();
				var priceB = $(b).find("#nonFormatPrice").text();
				return priceA - priceB;
			});
			$("#products").html(products);
		} else if (value == "price_high_low") {
			products.sort(function (a, b) {
				var priceA = $(a).find("#nonFormatPrice").text();
				var priceB = $(b).find("#nonFormatPrice").text();
				return priceB - priceA;
			});
			$("#products").html(products);
		} else if (value == "brand_a_z") {
			products.sort(function (a, b) {
				var nameA = $(a).find("#name").text().toLowerCase();
				var nameB = $(b).find("#name").text().toLowerCase();
				if (nameA < nameB) {
					return -1;
				}
				if (nameA > nameB) {
					return 1;
				}
				return 0;
			});
			$("#products").html(products);
		} else if (value == "brand_z_a") {
			products.sort(function (a, b) {
				var nameA = $(a).find("#name").text().toLowerCase();
				var nameB = $(b).find("#name").text().toLowerCase();
				if (nameA < nameB) {
					return 1;
				}
				if (nameA > nameB) {
					return -1;
				}
				return 0;
			});
			$("#products").html(products);
		} else {
			products.sort(function (a, b) {
				var idA = $(a).find("#id").text();
				var idB = $(b).find("#id").text();
				return idA - idB;
			});
			$("#products").html(products);
		}
	});

	$("#search").on("input", function () {
		filtre();
	});

	function filtre() {
		var min = parseFloat($("#min").val());
		var max = parseFloat($("#max").val());
		var search = $("#search").val();
		var value = $(".categories select").val();

		if (isNaN(min)) {
			min = 0;
		}
		if (isNaN(max)) {
			max = 100000000;
		}

		var products = $("#products .card");
		products.hide();
		products.each(function () {
			var price = $(this).find("#nonFormatPrice").text();
			var name = $(this).find("#name").text().toLowerCase();
			var category = $(this).find("#category").text();
			if (
				price >= min &&
				price <= max &&
				name.includes(search.toLowerCase()) &&
				(category == value) | (value == "all")
			) {
				$(this).show();
			}
		});
	}
});
