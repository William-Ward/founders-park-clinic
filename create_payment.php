<?php
    require 'vendor/autoload.php';

    use Square\SquareClient;

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // get amount and invoice id from the form
    $amount = $_POST['amount'];
    $invoice_id = $_POST['invoice-id'];
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
    <title>PHP Test</title>
</head>
<body>
    <button onclick="window.location.href='<?php echo $payment_link; ?>'">Pay</button>
</body>
</html>
