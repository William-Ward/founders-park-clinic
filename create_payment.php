<?php
    require 'vendor/autoload.php';

    use Square\SquareClient;

    // get amount and invoice id from the form
    $amount = $_POST['amount'];
    $invoice_id = $_POST['invoice-id'];
    $square_token = getenv('SQUARE_TOKEN');
    $loaction_id = getenv('LOCATION_ID');

    $client = new SquareClient([
        'accessToken' => $square_token,
        'environment' => \Square\Environment::PRODUCTION
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
