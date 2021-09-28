<?php

namespace App;

class HourForecast
{
    private string $city;
    private float $hourForecast2;
    private float $hourForecast4;
    private float $hourForecast6;
    private int $time2;
    private int $time4;
    private int $time6;

    public function __construct(string $city)
    {
        $data = json_decode(file_get_contents(
            "http://api.weatherapi.com/v1/forecast.json?key=be54bbf60b5e4b2087e64813212809&q=" . $city ."&days=7&aqi=no&alerts=no"
        ));

        $this->city = $city;

        $time = date("H");
        if ($time <= 21) {
            $this->hourForecast2 = $data->forecast->forecastday[0]->hour[(int) $time + 2]->temp_c;
            $this->time2 = (int) $time + 2;
        } else {
            $this->hourForecast2 = $data->forecast->forecastday[1]->hour[2 - (24 - (int) $time)]->temp_c;
            $this->time2 = 2 - (24 - (int) $time);
        }

        if ($time <= 19) {
            $this->hourForecast4 = $data->forecast->forecastday[0]->hour[(int) $time + 4]->temp_c;
            $this->time4 = (int) $time + 4;
        } else {
            $this->hourForecast4 = $data->forecast->forecastday[1]->hour[4 - (24 - (int) $time)]->temp_c;
            $this->time4 = 4 - (24 - (int) $time);
        }

        if ($time <= 17) {
            $this->hourForecast6 = $data->forecast->forecastday[0]->hour[(int) $time + 6]->temp_c;
            $this->time6 = (int) $time + 6;
        } else {
            $this->hourForecast6 = $data->forecast->forecastday[1]->hour[6 - (24 - (int) $time)]->temp_c;
            $this->time6 = 6 - (24 - (int) $time);
        }
    }


    public function getHourForecast2(): float
    {
        return $this->hourForecast2;
    }


    public function getHourForecast4(): float
    {
        return $this->hourForecast4;
    }


    public function getHourForecast6(): float
    {
        return $this->hourForecast6;
    }

    public function getTime2(): int
    {
        return $this->time2;
    }

    public function getTime4(): int
    {
        return $this->time4;
    }

    public function getTime6(): int
    {
        return $this->time6;
    }
}