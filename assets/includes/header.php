<header>
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand" href="../../assets/img/logo_bg.png" alt="Logo" width="100%" height="50"></a>
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
					<?php if(isset($_SESSION['id_user'])):?>
					<li class="nav-item">
						<a class="nav-link" href="../cart/cart.php"><i class="bi bi-cart"></i> Panier</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../profile/profile.php"><i class="bi bi-person"></i> <?=$_SESSION['first_name']?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../auth/logout.php"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
					</li>
					<?php endif;?>
				</ul>
			</div>
		</div>
	</nav>
</header>