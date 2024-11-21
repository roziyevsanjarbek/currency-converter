<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    require "src/Weather.php";

    $weather = new Weather();
    $data = $weather->getWeather();
    ?>

    <form action="Weather.php" method="POST" class="my-4">
        <div class="mb-3">
            <label for="city" class="form-label" id = "city">Search</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Enter city name">
        </div>
        <button type="submit" class="btn btn-primary">Get Weather</button>
    </form>



    <div class="container text-center">
        <h1 class="my-4">Weather in <span id="city-name">Tashkent</span></h1>

        <div class="weather-card text-center">
            <div class="mb-3">
                <img id="weather-icon" src="<?php echo 'https://openweathermap.org/img/wn/' . $weather->getWeather()->weather[0]->icon . '@2x.png'; ?>" alt="Weather Icon" class="weather-icon">
            </div>
            <h2 class="mb-3" id="temperature">
                <?php
                echo((int)($data->main->temp) - 273 . "°C")
                ?>
            </h2>
            <p id="description">Clear Sky</p>

            <div class="d-flex justify-content-around">
                <div>
                    <h5>Namlik</h5>
                    <p id="humidity"><?php echo($data->main->humidity . "%") ?></p>
                </div>
                <div>
                    <h5>Bosim</h5>
                    <p id="pressure"><?php echo($data->main->pressure . " Pa") ?></p>
                </div>
                <div>
                    <h5>Shamol</h5>
                    <p id="wind-speed"><?php echo($data->wind->speed . " m/s") ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
