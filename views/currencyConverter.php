<?php
require_once 'Currency.php';

// Initialize the Currency class and fetch available currencies
try {
    $currency = new Currency();
    $currencies = $currency->getCurrencies();
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

// Handle form submission
$converted_amount = null;
$error_message = null;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['amount'], $_GET['from'], $_GET['to'])) {
    $amount = (float)$_GET['amount'];
    $from = $_GET['from'];
    $to = $_GET['to'];

    try {
        $converted_amount = $currency->exchange($amount, $from, $to);
    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .currency-card {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .currency-section {
            padding: 60px 0;
        }

        .info-section {
            padding: 60px 0;
            text-align: center;
        }

        .btn-primary-custom {
            background-color: #d32f2f;
            border: none;
        }
    </style>
</head>
<body>
<div class="currency-section text-center pt-5 bg-primary-subtle">
    <h1>Currency Converter</h1>
    <p>Check live foreign exchange rates and convert currencies easily.</p>
    <div class="currency-card">
        <h3>Convert Now</h3>
        <form method="get">
            <div class="row g-3 align-items-center">
                <div class="col-md-5">
                    <label for="amount" class="form-label visually-hidden">Amount</label>
                    <input type="number" name="amount" id="amount" class="form-control" placeholder="Amount" value="10000" required>
                </div>
                <div class="col-md-3 text-center">
                    <select class="form-select" name="from" required>
                        <option value="" disabled selected>Select currency</option>
                        <?php foreach ($currencies as $key => $rate): ?>
                            <option value="<?= $key ?>"><?= $key ?></option>
                        <?php endforeach; ?>
                        <option value="UZS">UZS</option>
                    </select>
                </div>
                <div class="col-md-1 text-center">
                    <span style="font-size: 24px;">⇆</span>
                </div>
                <div class="col-md-3">
                    <select class="form-select" name="to" required>
                        <option value="" disabled selected>Select currency</option>
                        <option value="UZS">UZS</option>
                        <?php foreach ($currencies as $key => $rate): ?>
                            <option value="<?= $key ?>"><?= $key ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-primary-custom mt-3">Convert</button>
        </form>
        <p class="rate-info mt-3">
            <?php if ($converted_amount !== null): ?>
                Result: <?= number_format($converted_amount, 2) ?> <?= htmlspecialchars($_GET['to']) ?>
            <?php elseif ($error_message): ?>
                <span class="text-danger"><?= htmlspecialchars($error_message) ?></span>
            <?php endif; ?>
        </p>
    </div>
</div>
<div class="info-section bg-light">
    <h4 class="fw-bold">Let’s save you some time</h4>
    <p class="text-muted">If you’ve got a target exchange rate in mind but haven’t got time to keep tabs on market
        movement, then a firm order could be perfect for you. When your chosen rate is reached, we’ll act immediately,
        leaving you free to concentrate on your business.</p>
    <a href="/weather" class="btn btn-outline-danger">Ob havo ma'lumotlari</a>
</div>
</body>
</html>
