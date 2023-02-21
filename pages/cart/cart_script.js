$(function () {
	// get all items in cart from cookies corresponding to the user
	var cookies = document.cookie.split(";");
	var cart = [];
	$.each(cookies, function (index, cookie) {
		var cookie_name = cookie.split("=")[0].trim();
		if (cookie_name == "cart_" + sessionStorage.getItem("id_user")) {
			cart = JSON.parse(cookie.split("=")[1]);
		}
	});

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
				data.price = data.price
					.toString()
					.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
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

					<input
						min="0"
						name="quantity"
						value="1"
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
						`€</h6>
				</div>
				<div class="col-md-1 col-lg-1 col-xl-1 text-end">
					<button class="btn btn-link px-2"><i class="bi bi-trash"></i></button>
				</div>
			</div>

			<hr class="my-4" />`
				);
			},
			error: function () {
				console.log("error");
			},
		});
	});

	// on plus button click
	$(document).on("click", ".bi-plus", function () {
		var quantity = $(this).parent().siblings("input[name=quantity]");
		quantity.val(parseInt(quantity.val()) + 1);
	});

	// on minus button click
	$(document).on("click", ".bi-dash", function () {
		var quantity = $(this).parent().siblings("input[name=quantity]");
		if (parseInt(quantity.val()) > 0) {
			quantity.val(parseInt(quantity.val()) - 1);
		}
		if (parseInt(quantity.val()) == 0) {
			var item = $(this).parent().parent().parent();
			item.remove();
		}
	});

	// on trash button click
	$(document).on("click", ".bi-trash", function () {
		var item = $(this).parent().parent().parent();
		item.remove();
	});
});
