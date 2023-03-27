<?php require __dir__."/partials/head.php"; ?>
<div class="small-container">
	<?php require __dir__."/shared/header.php"; ?>

	<div class="container">
		<?php require __dir__."/shared/sidenav.php"; ?>
		<div class="data">
			<h1 class="title">Comparar países</h1>
			<div class="small-container-compare">
				<div class="container-selected-countries">
					<h3>Selecione 2 paises: </h3>
					<div class="selected-country">						
					</div>
				</div>
				<div class="actions">
					<button id="clear">limpar</button>
					<button disabled="true" id="compare">comparar</button>
				</div>
			</div>
			<div class="container-flags">
				<?php require __dir__."/images/flagsContainer.php"; ?>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		const clearSelectedButton = document.querySelector("#clear")
		const compareSelectedButton = document.querySelector("#compare")
		const selectedCountryDiv = document.querySelector(".selected-country")
		const country = document.createElement("div")
		let selectedCountry = []


		function selectCountry(countryCode, countryName) {
			if(selectedCountry.length >= 2) {
				compareSelectedButton.disabled = false
				return
			}
			let exists = false

			selectedCountry.forEach(value => {
				if(value === countryName){
					exists = true
				}
			})

			if(exists) {
				return
			}
			const image = document.createElement("img")
			image.src = `https://flagcdn.com/84x63/${countryCode}.png`
			image.width="32"
			image.height="24"
			image.srcset=`https://flagcdn.com/168x126/${countryCode}.png 2x,
			https://flagcdn.com/252x189/${countryCode}.png 3x`
			selectedCountry.push(countryName)
			selectedCountryDiv.appendChild(image)

			if(selectedCountry.length >= 2) {
				compareSelectedButton.disabled = false
			}
		}

		clearSelectedButton.addEventListener("click", () => {
			compareSelectedButton.disabled = true
			selectedCountry = []
			selectedCountryDiv.replaceChildren()
		})

		compareSelectedButton.addEventListener("click", () => {
			window.location.pathname = `/compare/${selectedCountry[0]}/${selectedCountry[1]}`
		})
	</script>

	<?php require __dir__."/shared/footer.php"; ?>
</div>
<?php require __dir__."/partials/footer.php"; ?>