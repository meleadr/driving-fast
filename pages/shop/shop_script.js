$(function() {
	$.ajax({
		type: "POST",
		url: "shop_controller.php",
		data: {
			"action": "getProducts"
		},
		success: function(data) {
			var products = JSON.parse(data);
			// foreach product
			$.each(products, function(index, product) {
				product.price = product.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
				$("#products").append(
					'<div class="card" style="width: 18rem;">'+
						'<img src="'+product.path_image+'" class="card-img-top" alt="'+product.model+'">'+
						'<div class="card-body">'+
							'<h5 class="card-title">'+product.model+'</h5>'+
							'<p class="card-text">'+product.description+'</p>'+
							'<p class="card-text">'+product.price+'€</p>'+
							'<a href="#" class="btn btn-primary">Voir le produit</a>'+
						'</div>'+
					'</div>');
			});
		},
		error: function() {
			console.log("error");
		}
	});
});