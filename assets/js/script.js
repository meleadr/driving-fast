$(function () {
	var id_user = sessionStorage.getItem("id_user");
	setCartQuantity(id_user);
});

function getCartOfUser(id_user) {
	var cookies = document.cookie.split(";");
	var cart = [];
	$.each(cookies, function (index, cookie) {
		var cookie_name = cookie.split("=")[0].trim();
		if (cookie_name == "cart_" + id_user) {
			cart = JSON.parse(cookie.split("=")[1]);
		}
	});
	return cart;
}

function getTotalItemsInCart(id_user) {
	var cart = this.getCartOfUser(id_user);
	var total = 0;
	$.each(cart, function (index, product) {
		total += parseInt(product.quantity);
	});
	return total;
}

function getTotalPriceOfCart(id_user) {
	var cart = this.getCartOfUser(id_user);
	var total = 0;
	$.each(cart, function (index, product) {
		total += parseInt(product.quantity) * getPriceOfProduct(product.id);
	});
	return total;
}

function removeItemOfCart(id_user, id_product) {
	var cart = this.getCartOfUser(id_user);
	$.each(cart, function (index, product) {
		if (product.id == id_product) {
			cart.splice(index, 1);
		}
	});
	document.cookie = "cart_" + id_user + "=" + JSON.stringify(cart) + ";path=/";
	setCartQuantity(id_user);
}

function setCartQuantity(id_user) {
	var nbrTotal = this.getTotalItemsInCart(id_user);
	sessionStorage.setItem("cart_quantity", nbrTotal);
	$("#cart_quantity").text(nbrTotal);
}

function getCartQuantityProduct(id_user, id_product) {
	var cart = this.getCartOfUser(id_user);
	var quantity = 0;
	$.each(cart, function (index, product) {
		if (product.id == id_product) {
			quantity = product.quantity;
		}
	});
	return quantity;
}

function setCartQuantityProduct(id_user, id_product, quantity) {
	var product_already_in_cart = false;
	var product_quantity = 0;
	var cart = getCartOfUser(id_user);

	$.each(cart, function (index, product) {
		if (product.id == id_product) {
			product_already_in_cart = true;
			product_quantity = product.quantity;
		}
	});

	if (product_already_in_cart) {
		var cart = getCartOfUser(id_user);
		$.each(cart, function (index, product) {
			if (product.id == id_product) {
				product.quantity = parseInt(product_quantity) + parseInt(quantity);
			}
		});
		document.cookie =
			"cart_" + id_user + "=" + JSON.stringify(cart) + "; path=/";
	} else {
		var product = {
			id: id_product,
			quantity: quantity,
		};
		var cart = [];
		cart.push(product);

		var actual_cart = getCartOfUser(id_user);
		$.each(actual_cart, function (index, product) {
			cart.push(product);
		});

		document.cookie =
			"cart_" + id_user + "=" + JSON.stringify(cart) + "; path=/";
	}
	setCartQuantity(id_user);
}

function getPriceOfProduct(id_product) {
	var price = 0;
	$.ajax({
		type: "POST",
		url: "../../pages/product/product_controller.php",
		data: {
			action: "getPrice",
			id: id_product,
		},
		async: false,
		success: function (data) {
			price = data;
		},
		error: function () {
			console.log("Erreur lors du chargement du prix");
		},
	});
	return +price;
}

function formatPrice(price) {
	// 123456789 => 123 456 789 €
	var price = price.toString();
	var price_formated = "";
	var count = 0;
	for (var i = price.length - 1; i >= 0; i--) {
		if (count == 3) {
			price_formated = " " + price_formated;
			count = 0;
		}
		price_formated = price[i] + price_formated;
		count++;
	}
	price_formated += " €";
	return price_formated;
}
