<?php $page_title = 'Panier';
$mvc = 'cart';
include_once('../../assets/includes/head.php');
include_once('../../assets/includes/header.php');
?>
<section class="h-100 h-custom">
	<div class="container py-5 h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
			<div class="col-12">
				<div
					class="card card-registration card-registration-2"
					style="border-radius: 15px"
				>
					<div class="card-body p-0">
						<div class="row g-0">
							<div class="col-lg-8">
								<div class="p-5">
									<div
										class="d-flex justify-content-between align-items-center mb-5"
									>
										<h1 class="fw-bold mb-0 text-black">Panier</h1>
										<h6 id="nbItems" class="mb-0 text-muted"></h6>
									</div>
									<hr id="fromHere" class="my-4" />
									
									<div class="pt-5">
										<h6 class="mb-0">
											<a href="../shop/shop.php" class="text-body"><i class="bi bi-arrow-left-square"></i> Retourner au shop</a>
										</h6>
									</div>
								</div>
							</div>
							<div class="col-lg-4 bg-grey">
								<div class="p-5">
									<h3 class="fw-bold mb-5 mt-2 pt-1">Récapitulatif</h3>
									<hr class="my-4" />

									<div class="d-flex justify-content-between mb-4">
										<h5 class="text-uppercase">Total articles</h5>
										<h5 id="totalPriceItems"></h5>
									</div>

									<div class="d-flex justify-content-between mb-4">
										<h5 class="text-uppercase">Livraison</h5>
										<h5>500 €</h5>
									</div>

									<hr class="my-4" />

									<div class="d-flex justify-content-between mb-5">
										<h5 class="text-uppercase">Prix total</h5>
										<h5 id="totalPrice"></h5>
									</div>

									<button
										type="button"
										class="btn btn-dark btn-block btn-lg"
										data-mdb-ripple-color="dark"
									>
										Valider
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
include_once('../../assets/includes/footer.php'); 
?>