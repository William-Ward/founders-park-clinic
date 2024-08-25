
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/tailwind.css">
    <title>Founders Park Clinic</title>
</head>
<body>
    <h1>Hello there!</h1>
    <h1>Enter payment details</h1>
    <form action="create_payment.php" method="post">
        <label for="amount">Amount:</label><br>
        <input type="text" id="amount" name="amount" value="100"><br>
        <label for="invoice-id">invoice ID:</label><br>
        <input type="text" id="invoice-id" name="invoice-id"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
