<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toshkent Ob-havo Ma'lumotlari</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .weather-container {
            background-color: #5F9EA0;
            padding: 30px;
            border-radius: 10px;
            background-image: url('https://wallpapercave.com/wp/7rhrsIf.jpg');
            background-size: cover;
            width: 320px;
            text-align: center;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
            color: #fff;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .weather-info {
            margin: 15px 0;
            font-size: 1.1rem;
        }

        .weather-widget {
            background-color: rgba(0, 0, 0, 0.6); 
            padding: 20px;
            border-radius: 10px;
            color: white;
        }

        .icon {
            font-size: 3rem;
            margin: 10px 0;
        }

        .error-message {
            color: #ffcccb;
            font-size: 1rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="weather-container">
        <div class="weather-widget">
            <h2>O'zbekiston, Toshkent</h2>
            <div class="icon">🌤</div>
            <h2>Partly Sunny</h2>
            <?php if ($weatherData):
                ?>
                <div class="weather-info">
                    <strong>Temperatura:</strong> <?php echo round($weatherData['main']['temp'] - 273.15, 2); ?> °C 🌥
                </div>
                <div class="weather-info">
                    <strong>Bosim:</strong> <?php echo $weatherData['main']['pressure']; ?> hPa 🌡
                </div>
                <div class="weather-info">
                    <strong>Namlik:</strong> <?php echo $weatherData['main']['humidity']; ?>% 💧
                </div>
                <div class="weather-info">
                    <strong>Shamol tezligi:</strong> <?php echo $weatherData['wind']['speed']; ?> m/s 🌬
                </div>
            <?php else: ?>
                <p class="error-message">Ma'lumotlarni olishda xatolik yuz berdi.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
