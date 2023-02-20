<?php 
$page_title = 'Accueil';
$mvc = 'landing';
include_once('../../assets/includes/head.php');
include_once('../../assets/includes/header.php');
?>
<section class="col-sm-12">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="../../assets/img/1.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Renault Sport R.S.0.1</h5>
					<p>La SuperCar made in France</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="a../../ssets/img/2.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Corvette C7</h5>
					<p>L'américaine qui fait réver</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="../../assets/img/3.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Pagani Zonda Fantasma Evo</h5>
					<p>Avec ses 760cv cette italienne donne envie</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section>
<?php
include_once('../../assets/includes/footer.php'); 
?>