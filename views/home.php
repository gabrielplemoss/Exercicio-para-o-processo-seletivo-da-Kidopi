<?php require __dir__."/partials/head.php"; ?>
<div class="small-container">
	<?php require __dir__."/shared/header.php"; ?>

	<div class="container">
		<?php require __dir__."/shared/sidenav.php"; ?>
		<div class="data">
			<h1 class="title">Buscar por país</h1>
			<div class="country-container">
				<a href="/australia">
					<div class="country">
						<?php require __dir__."/images/flags/australia.php"; ?>
						<span>Austrália</span>
					</div>
				</a>
				<a href="/brazil">
					<div class="country">
						<?php require __dir__."/images/flags/brazil.php"; ?>
						<span>Brasil</span>
					</div>
				</a>
				<a href="/canada">
					<div class="country">
						<?php require __dir__."/images/flags/canada.php"; ?>
						<span>Canadá</span>
					</div>
				</a>
			</div>
		</div>
	</div>

	<?php require __dir__."/shared/footer.php"; ?>
</div>
<?php require __dir__."/partials/footer.php"; ?>