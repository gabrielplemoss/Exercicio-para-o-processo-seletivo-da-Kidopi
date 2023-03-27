<?php
class Router {
	private $routes;

	public function get($path, $controller, $method) {
		$this->routes[$path] = [
			"httpMethod" => "GET",
			"controller" => $controller,
			"method" => $method
		];
	}

	public function run() {
		$urlMatched = $this->matchUrl();

		if($urlMatched["matched"]) {
			$route = $this->routes[$urlMatched["key"]];
			$controller = $route["controller"];
			$method = $route["method"];

			$controller->$method();
		} else {
			echo "<h1>asdasdas</h1>";
		}
	}

	public function matchUrl() {
		$reqUrl = $_SERVER["REQUEST_URI"];
		$match = ["matched" => false, "key" => ""];
		$keys = array_keys($this->routes);

		foreach ($keys as $key) {
			$regex = "/^".str_replace("/", "\/", $key)."$/";
			if(preg_match($regex, $reqUrl)){
				$match["matched"] = true;
				$match["key"] = $key;
			}
		}

		return $match;
	}
}
