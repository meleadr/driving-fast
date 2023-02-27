<?php 
$page_title = 'Shop';
$mvc = 'shop';
include_once('../../assets/includes/head.php');
include_once('../../assets/includes/header.php');
?>
<section>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<div class="categories">
				<select name="select" id="select">
					<option value="all">Catégories</option>
				</select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="tri">
				<select name="select" id="select">
					<option value="id">Trier par</option>
					<option value="price_low_high">Prix croissant</option>
					<option value="price_high_low">Prix décroissant</option>
					<option value="brand_a_z">Nom A-Z</option>
					<option value="brand_z_a">Nom Z-A</option>
				</select>
			</div>
		</div>
		<div class="col-md-2">
			<div class="min">
				<input type="number" name="min" id="min" placeholder="Min (€)">
			</div>
		</div>
		<div class="col-md-2">
			<div class="max">
				<input type="number" name="max" id="max" placeholder="Max (€)">
			</div>
		</div>
		<div class="col-md-3">
			<div class="search">
				<input id="search" type="text" name="search" placeholder="Rechercher">
			</div>
		</div>
	</div>
</section>
<section id="products">
</section>
<?php
include_once('../../assets/includes/footer.php');
?>