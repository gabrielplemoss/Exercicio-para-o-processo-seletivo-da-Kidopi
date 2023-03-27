<?php require __dir__."/partials/head.php"; ?>
<div class="small-container">
	<?php require __dir__."/shared/header.php"; ?>

	<div class="container">
		<?php require __dir__."/shared/sidenav.php"; ?>
		<div class="data">
			<h1 class="title">Comparação</h1>

			<?php
			$taxa1 = $country1Total["Mortos"] / $country1Total["Confirmados"];
			$taxa2 = $country2Total["Mortos"] / $country2Total["Confirmados"];
			?>
			<div class="countries-compare">
				<div class="compare">
					<div class="country-total">
						<h2 class="title">Pais: <?php echo $countries[0]; ?></h2>
						<h2>Confirmados: <?php echo $country1Total["Confirmados"]; ?></h2>
						<h2>Mortos: <?php echo $country1Total["Mortos"]; ?></h2>
						<h2>taxa: <?php echo $taxa1 ; ?></h2>
					</div>

					<div class="country-total">
						<h2 class="title">Pais: <?php echo $countries[1]; ?></h2>
						<h2>Confirmados: <?php echo $country2Total["Confirmados"]; ?></h2>
						<h2>Mortos: <?php echo $country2Total["Mortos"]; ?></h2>
						<h2>taxa: <?php echo $taxa2; ?></h2>
					</div>
				</div>
				<p class="difference">Diferença <?php echo $taxa1 - $taxa2 ;?></p>
			</div>
		</div>

	</div>

	<?php require __dir__."/shared/footer.php"; ?>
</div>
<?php require __dir__."/partials/footer.php"; ?>