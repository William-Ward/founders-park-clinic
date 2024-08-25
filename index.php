
<!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
</head>
<body>

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
