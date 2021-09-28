<?php

namespace App;
use WeatherAPILib\WeatherAPIClient;

class CityForecast
{
    private string $city;
    private int $days;
    private float $currentTemp;
    private array $forecastTemp;
    private string $currentIcon;
    private float $currentWind;
    private array $forecastWind;
    private array $forecastIcons;

    public function __construct(string $city, int $days)
    {
        $key = "be54bbf60b5e4b2087e64813212809";
        $client = new WeatherAPIClient($key);
        $aPIs = $client->getAPIs();
        $forecast = $aPIs->getForecastWeather($city, $days);

        $this->city = $city;
        $this->days = $days;
        $this->currentTemp = $forecast->current->tempC;
        $this->forecastTemp = [
            $forecast->forecast->forecastday[0]->day->maxtempC,
            $forecast->forecast->forecastday[1]->day->maxtempC,
            $forecast->forecast->forecastday[2]->day->maxtempC
        ];
        $this->currentWind = $forecast->current->windKph;
        $this->forecastWind = [
            $forecast->forecast->forecastday[0]->day->maxwindKph,
            $forecast->forecast->forecastday[1]->day->maxwindKph,
            $forecast->forecast->forecastday[2]->day->maxwindKph
        ];
        $this->currentIcon = $forecast->current->condition->icon;
        $this->forecastIcons = [
            $forecast->forecast->forecastday[0]->day->condition->icon,
            $forecast->forecast->forecastday[1]->day->condition->icon,
            $forecast->forecast->forecastday[2]->day->condition->icon
        ];
    }

    public function getCurrentTemp(): float
    {
        return $this->currentTemp;
    }

    public function getCurrentWind(): float
    {
        return $this->currentWind;
    }


    public function getForecastTemp(): array
    {
        return $this->forecastTemp;
    }

    public function getForecastWind(): array
    {
        return $this->forecastWind;
    }

    public function getCurrentIcon(): string
    {
        return $this->currentIcon;
    }

    public function getForecastIcons(): array
    {
        return $this->forecastIcons;
    }
}
