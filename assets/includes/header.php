<header>
	<nav class="navbar navbar-expand-lg w-100">
		<div class="container text-center">
			<a class="navbar-brand" href="../landing/landing.php"><img src="../../assets/img/logo_bg.png" alt="Logo" width="100%" height="50"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="../shop/shop.php"><i class="bi bi-car-front"></i> Shop</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../contact/contact.php"><i class="bi bi-telephone"></i> Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../cart/cart.php"><i class="bi bi-cart"></i> Panier <span id="cart_quantity"></span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../profile/profile.php"><i class="bi bi-person"></i> <?=$_SESSION['first_name']?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../auth/logout.php"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>