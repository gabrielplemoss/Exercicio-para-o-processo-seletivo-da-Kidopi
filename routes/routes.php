<?php
require __dir__."/router.php";
require __dir__."/../controllers/homeController.php";

$router = new Router();
$router->get("/", new HomeController(), "home");
$router->get("/[\w+]+", new HomeController(), "findByCountryName");
$router->get("/compare", new HomeController(), "compareHome");
$router->get("/compare/[\w+]+/[\w+]+", new HomeController(), "compareCountry");
$router->run();
