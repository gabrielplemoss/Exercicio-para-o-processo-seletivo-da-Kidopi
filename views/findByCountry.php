<?php require __dir__."/partials/head.php"; ?>
<div class="small-container">
	<?php require __dir__."/shared/header.php"; ?>
	<div class="container">
		<?php require __dir__."/shared/sidenav.php"; ?>
		<div class="data">
			<h1 class="title"><?php echo $country; ?></h1>
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nome do estado</th>
						<th>Casos confirmados</th>
						<th>Mortes</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($states as $key=>$state) { ?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $state->{"ProvinciaEstado"}; ?></td>
							<td><?php echo $state->{"Confirmados"}; ?></td>
							<td><?php echo $state->{"Mortos"}; ?></td>
						</tr> 
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<?php require __dir__."/shared/footer.php"; ?>
</div>
<?php require __dir__."/partials/footer.php"; ?>
