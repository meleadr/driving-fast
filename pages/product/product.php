<?php $page_title = 'Produit';
$mvc = 'product';
include_once('../../assets/includes/head.php');
include_once('../../assets/includes/header.php');
?>
<section>
	<div class="container mt-5 mb-5">
		<div class="card">
			<div class="row g-0">
				<div class="col-md-6 border-end">
					<div class="d-flex flex-column justify-content-center">
						<div class="main_image">	<img src="" id="main_product_image" width="400">	</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="p-3 right-side">
						<div class="d-flex justify-content-between align-items-center">
							<h3 id="name"></h3>
							<span class="heart"><i class='bi bi-heart'></i></span>	
						</div>
						<div class="mt-2 pr-3 content">
							<p id="description"></p>
						</div>
						<h3 id="price"></h3>
						<div class="mt-5">
							<span class="fw-bold">Color</span>	
							<div class="colors">
								<ul id="marker">
									<li id="marker-1"></li>
									<li id="marker-2"></li>
									<li id="marker-3"></li>
									<li id="marker-4"></li>
									<li id="marker-5"></li>
								</ul>
							</div>
						</div>
						<div class="mt-5">
							<span class="fw-bold">Quantité</span>	
							<div class="d-flex flex-row align-items-center mt-4">
								<div class="d-flex flex-row align-items-center">
									<button class="btn btn-primary" id="minus">-</button>
									<input type="text" class="form-control" id="quantity" value="1" readonly>
									<button class="btn btn-primary" id="plus">+</button>
								</div>
							</div>
						</div>
						<div class="buttons d-flex flex-row mt-5 gap-3">	<button class="btn btn-primary" id="add_to_cart">Ajouter au panier</button></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="popup">
		<div class="popup-content">
			<div class="popup-header">
				<h3>Produit ajouté au panier</h3>
				<div class="image">
					<img src="" id="popup_image" width="200">
				</div>
			</div>
			<div class="popup-body">
				<div class="flex-row align-items-center">
					<div class="content">
						<h3 id="popup_name"></h3>
						<h3 id="popup_price"></h3>
					</div>
				</div>
			</div>
			<div class="popup-footer">
				<a href="../cart/cart.php" class="btn btn-primary">Voir le panier</a>
				<button class="btn btn-primary" id="continue_shopping">Continuer mes achats</button>
			</div>
		</div>
	</div>
</section>
<?php
include_once('../../assets/includes/footer.php'); 
?>