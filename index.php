<?php


require_once "vendor/autoload.php";
use App\CityForecast;
use App\HourForecast;



if (isset($_GET["submit"]))
{
    $weather = new CityForecast($_GET["city"], 7);
    $current = new HourForecast($_GET["city"]);
    $city = $_GET["city"];
} else {
    $weather = new CityForecast("Riga", 7);
    $current = new HourForecast("Riga");
    $city = "Riga";
}

require_once "index.view.php";


