$(function () {
	var id_user = sessionStorage.getItem("id_user");
	var cart = getCartOfUser(id_user);
	var nbrTotal = getTotalItemsInCart(id_user);
	$.each(cart, function (index, product) {
		$.ajax({
			type: "POST",
			url: "../product/product_controller.php",
			data: {
				action: "getProduct",
				id: product.id,
			},
			success: function (data) {
				data = JSON.parse(data);
				data.price = data.price * product.quantity;
				data.price = formatPrice(data.price);
				$("#fromHere").after(
					`
				<div
				class="row mb-4 d-flex justify-content-between align-items-center"
			>
				<div class="col-md-2 col-lg-2 col-xl-2">
					<img
						src="` +
						data.path_image +
						`"
						class="img-fluid rounded-3"
						alt="` +
						data.model +
						`"
					/>
				</div>
				<div class="col-md-3 col-lg-3 col-xl-3">
					<h6 class="text-muted">` +
						data.brand +
						`</h6>
					<h6 class="text-black mb-0">` +
						data.model +
						`</h6>
				</div>
				<div class="col-md-3 col-lg-3 col-xl-2 d-flex">
					<button class="btn btn-link px-2">
						<i class="bi bi-dash"></i>
					</button>
					<input name="id_product" type="hidden" value="` +
						product.id +
						`"/>
					<input
						min="0"
						name="quantity"
						value="` +
						getCartQuantityProduct(id_user, product.id) +
						`"
						type="text"
						class="form-control form-control-sm"
						readonly
					/>

					<button class="btn btn-link px-2">
						<i class="bi bi-plus"></i>
					</button>
				</div>
				<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
					<h6 class="mb-0">` +
						data.price +
						`</h6>
				</div>
				<div class="col-md-1 col-lg-1 col-xl-1 text-end">
					<button class="btn btn-link px-2"><i class="bi bi-trash"></i></button>
				</div>
			</div>

			<hr id="hr_` +
						product.id +
						`" class="my-4" />`
				);
				setNbrAticle();
			},
			error: function () {
				console.log("error");
			},
		});
	});

	$(document).on("click", ".bi-plus", function () {
		var quantity = $(this).parent().siblings("input[name=quantity]");
		quantity.val(parseInt(quantity.val()) + 1);
		nbrTotal += 1;
		setCartQuantityProduct(
			id_user,
			quantity.parent().parent().parent().find("input[name=id_product]").val(),
			quantity.val()
		);
		setNbrAticle();
	});

	$(document).on("click", ".bi-dash", function () {
		var quantity = $(this).parent().siblings("input[name=quantity]");
		if (parseInt(quantity.val()) > 0) {
			quantity.val(parseInt(quantity.val()) - 1);
			nbrTotal -= 1;
			setCartQuantityProduct(
				id_user,
				quantity
					.parent()
					.parent()
					.parent()
					.find("input[name=id_product]")
					.val(),
				quantity.val()
			);
		}
		if (parseInt(quantity.val()) == 0) {
			var item = $(this).parent().parent().parent();
			item.remove();
			$("#hr_" + item.find("input[name=id_product]").val()).remove();
			var id_product = item.find("input[name=id_product]").val();
			removeItemOfCart(id_user, id_product);
		}
		setNbrAticle();
	});

	$(document).on("click", ".bi-trash", function () {
		var item = $(this).parent().parent().parent();
		item.remove();
		$("#hr_" + item.find("input[name=id_product]").val()).remove();
		var id_product = item.find("input[name=id_product]").val();
		removeItemOfCart(id_user, id_product);
		setNbrAticle();
	});

	$("#validateCart").click(function () {
		var cart = getCartOfUser(id_user);
		$.ajax({
			type: "POST",
			url: "cart_controller.php",
			data: {
				action: "createOrder",
				id_user: id_user,
				cart: cart,
			},
			success: function (data) {
				if (data == "success") {
					removeAllItemsOfCart(id_user);
					//
					$("#message").text("Votre commande a été validée");
				} else {
					$("#message").text(data);
				}
			},
			error: function () {
				console.log("error");
			},
		});
	});

	function setNbrAticle() {
		$("#totalPriceItems").text(formatPrice(getTotalPriceOfCart(id_user)));
		$("#totalPrice").text(formatPrice(getTotalPriceOfCart(id_user) + 500));
		$("#nbItems").text(nbrTotal + " articles");
	}
});
