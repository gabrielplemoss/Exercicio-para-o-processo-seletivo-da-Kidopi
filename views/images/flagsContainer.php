<?php foreach ($countryList as $country) { ?>
	<?php if(isset($countryCode->{$country})){
		$code = strtolower($countryCode->{$country}); ?>
		<div class="flag"
			onclick="selectCountry('<?php echo $code?>','<?php echo $country?>')"
		>
			<img
			src="https://flagcdn.com/84x63/<?php echo $code?>.png"
			srcset="https://flagcdn.com/168x126/<?php echo $code?>.png 2x,
			https://flagcdn.com/252x189/$code.png 3x"
			width="32"
			height="24"
			alt="<?php echo $country ?>"
			>
			<span class="flag-name"><?php echo $country; ?></span>
		</div>
	<?php	} ?>
<?php	} ?>