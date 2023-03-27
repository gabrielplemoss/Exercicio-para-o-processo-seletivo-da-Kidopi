<?php

class HomeController {
	public $lastAccess;

	public function __construct() {
		require __dir__."/../database/getLastInsert.php";
		$this->lastAccess = $dados;
	}

	public function home() {
		require __dir__."/../views/home.php";
	}

	public function findByCountryName() {
		$uri = $_SERVER["REQUEST_URI"];
		$country = str_replace("/", "", $uri);

		$response = file_get_contents("https://dev.kidopilabs.com.br/exercicio/covid.php?pais=$country");
		$data = json_decode($response);
		$states = get_mangled_object_vars($data);

		require __dir__."/../database/insertOne.php";
		require __dir__."/../views/findByCountry.php";
	}

	public function compareHome () {
		$countryCodeJson = file_get_contents(__dir__."/../countryCode.json");
		$countryCode = json_decode($countryCodeJson);

		$response = file_get_contents("https://dev.kidopilabs.com.br/exercicio/covid.php?listar_paises=1");
		$data = json_decode($response);
		$countryList = get_mangled_object_vars($data);

		require __dir__."/../views/compareCountries.php";
	}

	public function compareCountry() {
		$uri = $_SERVER["REQUEST_URI"];
		$uri = str_replace("/compare/", "", $uri);
		$countries = explode("/", $uri);

		$country1 = file_get_contents("https://dev.kidopilabs.com.br/exercicio/covid.php?pais=$countries[0]");
		$datacountry1 = json_decode($country1);

		$country2 = file_get_contents("https://dev.kidopilabs.com.br/exercicio/covid.php?pais=$countries[1]");
		$datacountry2 = json_decode($country2);


		$datacountry1 = get_mangled_object_vars($datacountry1);
		$datacountry2 = get_mangled_object_vars($datacountry2);

		$country1Total = ["Confirmados" => 0, "Mortos" => 0];
		$country2Total = ["Confirmados" => 0, "Mortos" => 0];


		foreach ($datacountry1 as $value) {
			$country1Total["Confirmados"] += $value->{"Confirmados"};
			$country1Total["Mortos"] += $value->{"Mortos"};
		}

		foreach ($datacountry2 as $value) {
			$country2Total["Confirmados"] += $value->{"Confirmados"};
			$country2Total["Mortos"] += $value->{"Mortos"};
		}

		require __dir__."/../views/compare.php";
	}
}
