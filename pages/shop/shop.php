<?php 
$page_title = 'Shop';
$mvc = 'shop';
include_once('../../assets/includes/head.php');
include_once('../../assets/includes/header.php');
?>
<section>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="categories">
				<select name="select" id="select">
					<option value="0">Catégories</option>
					<option value="1">T-shirt</option>
					<option value="2">Pantalon</option>
					<option value="3">Chaussures</option>
					<option value="4">Sweat</option>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="tri">
				<select name="select" id="select">
					<option value="0">Trier par</option>
					<option value="price_low_high">Prix croissant</option>
					<option value="price_high_low">Prix décroissant</option>
					<option value="brand_a_z">Nom A-Z</option>
					<option value="brand_z_a">Nom Z-A</option>
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="search">
				<input type="text" name="search" placeholder="Rechercher">
				<button class="btn btn-primary" type="submit" name="submit-search"><i class="bi bi-search"></i></button>
			</div>
		</div>
	</div>
</section>
<section id="products">
</section>
<?php
include_once('../../assets/includes/footer.php');
?>