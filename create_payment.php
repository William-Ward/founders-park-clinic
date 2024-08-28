<?php
    require 'vendor/autoload.php';

    use Square\SquareClient;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // get amount and invoice id from the form
    $amount = $_POST['amount'];
    $account_number = $_POST['account-number'];
    // output the square token to the console
    $square_token = getenv('SQUARE_TOKEN');
    $location_id = getenv('LOCATION_ID');
    $environment = getenv('SQUARE_ENV');

    if (!$square_token || !$location_id || !$environment) {
        $square_token = $_ENV['SQUARE_TOKEN'];
        $location_id = $_ENV['LOCATION_ID'];
        $environment = $_ENV['SQUARE_ENV'];
    }

    if (!$square_token || !$location_id || !$environment) {
        exit;
    }

    \Square\Environment::PRODUCTION;
    $client = new SquareClient([
        'accessToken' => $square_token,
        'environment' => $environment
    ]);

    $price_money = new \Square\Models\Money();
    $price_money->setAmount($amount);
    $price_money->setCurrency('USD');
    
    $quick_pay = new \Square\Models\QuickPay(
        'test',
        $price_money,
        $location_id
    );
    
    $body = new \Square\Models\CreatePaymentLinkRequest();
    $body->setQuickPay($quick_pay);
    $body->setPaymentNote('Payment for account number: ' . $account_number);
    
    $api_response = $client->getCheckoutApi()->createPaymentLink($body);
    
    if ($api_response->isSuccess()) {
        $result = $api_response->getResult();
        $payment_link = $result->getPaymentLink()->getUrl();
    } else {
        $errors = $api_response->getErrors();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/tailwind.css">
    <title>Founders Park Clinic</title>
    <style>
        /* Adding a custom style for better control over the background image */
        .bg-cover {
            background-image: url('images/background1.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-cover bg-white bg-opacity-50 flex items-center justify-center min-h-screen">
    <div class="container mx-auto p-6 bg-white bg-opacity-50 shadow-lg rounded-lg">
        <button onclick="window.location.href='<?php echo $payment_link; ?>'"
            class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Pay
        </button>
    </div>
</body>
</html>
