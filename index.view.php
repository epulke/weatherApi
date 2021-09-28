<!DOCTYPE html>
<html>
<head>
    <link href="index.view.css" rel="stylesheet">
</head>
<body>
<h2 style="text-align: center">Weather Forecast</h2>
<form style="text-align: center" action="#">
    <label for="city">Enter city:</label>
    <input type="text" id="city" name="city" value="Riga"><br><br>
    <input type="submit" id="submit" name="submit" value="Submit">
</form>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="weather">
                <div class="current">
                    <div class="info">
                        <div>&nbsp;</div>
                        <div class="city"><small><small>CITY:</small></small> <?= $city; ?></div>
                        <div class="temp"><?= $weather->getCurrentTemp(); ?>° <small>C</small></div>
                        <div class="wind"><small><small>WIND:</small></small> <?= $weather->getCurrentWind(); ?> km/h</div>
                        <div>&nbsp;</div>
                    </div>
                    <div class="icon">
                            <img src="<?= $weather->getCurrentIcon()?>" alt="" class="be-ava-comment">
                    </div>

                </div>
                <div class="new">
                    <div class="day">
                        <h3>Today At <?= $current->getTime2(); ?>:00</h3>
                        <p><span class="wi-day-cloudy"></span>
                        <div class="temp"><?= $current->getHourForecast2(); ?>° <small>C</small></div>
                        </p>
                    </div>
                    <div class="day">
                        <h3>Today At <?= $current->getTime4(); ?>:00</h3>
                        <p><span class="wi-day-cloudy"></span>
                        <div class="temp"><?= $current->getHourForecast4(); ?>° <small>C</small></div>
                        </p>
                    </div>
                    <div class="day">
                        <h3>Today At <?= $current->getTime6(); ?>:00</h3>
                        <p><span class="wi-day-cloudy"></span>
                        <div class="temp"><?= $current->getHourForecast6(); ?>° <small>C</small></div>
                        </p>
                    </div>
            </div>
                <div class="future">
                    <div class="day">
                        <h3>Today</h3>
                        <div class="icon">
                            <img src="<?= $weather->getForecastIcons()[0]?>" alt="" class="be-ava-comment">
                        </div>
                        <p><span class="wi-day-cloudy"></span>
                        <div class="temp"><?= $weather->getForecastTemp()[0]; ?>° <small>C</small></div>
                        <div class="wind"><small><small>WIND:</small></small> <?= $weather->getForecastWind()[0]; ?> km/h</div>
                        </p>
                    </div>
                    <div class="day">
                        <h3>Tomorrow</h3>
                        <div class="icon">
                            <img src="<?= $weather->getForecastIcons()[1]?>" alt="" class="be-ava-comment">
                        </div>
                        <p><span class="wi-showers">
                        <div class="temp"><?= $weather->getForecastTemp()[1]; ?>° <small>C</small></div>
                        <div class="wind"><small><small>WIND:</small></small> <?= $weather->getForecastWind()[1]; ?> km/h</div>
                        </span></p>
                    </div>
                    <div class="day">
                        <h3>Day after tomorrow</h3>
                        <div class="icon">
                            <img src="<?= $weather->getForecastIcons()[2]?>" alt="" class="be-ava-comment">
                        </div>
                        <p><span class="wi-rain"></span>
                        <div class="temp"><?= $weather->getForecastTemp()[2]; ?>° <small>C</small></div>
                        <div class="wind"><small><small>WIND:</small></small> <?= $weather->getForecastWind()[2]; ?> km/h</div>
                        </p>
                    </div>


                </div>
        </div>
    </div>
</div>





</body>
</html>