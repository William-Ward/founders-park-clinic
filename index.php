
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
    <!-- <h1>Hello there!</h1>
    <h1>Enter payment details</h1>
    <form action="create_payment.php" method="post">
        <label for="amount">Amount:</label><br>
        <input type="text" id="amount" name="amount" value="100"><br>
        <label for="invoice-id">invoice ID:</label><br>
        <input type="text" id="invoice-id" name="invoice-id"><br><br>
        <input type="submit" value="Submit">
    </form> -->
<body class="bg-cover bg-gray-900 bg-opacity-50 flex items-center justify-center min-h-screen">
    <div class="container mx-auto p-6 bg-white bg-opacity-50 shadow-lg rounded-lg">
        <!-- Logo Image -->
        <div class="flex justify-center mb-8">
            <img src="images/logo.png" alt="Logo" class="h-24">
        </div>
        <!-- Main Content Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <!-- Left Column: Image -->
            <div class="flex items-center justify-center">
                <img src="images/faces.jpeg" alt="Placeholder Image" class="rounded-lg shadow-md">
            </div>

            <!-- Right Column: Contact and Location Information -->
            <div class="flex flex-col justify-center text-gray-800">
                <h1 class="text-3xl font-bold mb-4">Contact Information</h1>
                <p class="text-gray-700 mb-2"><strong>Phone:</strong> (123) 456-7890</p>
                <p class="text-gray-700 mb-2"><strong>Email:</strong> info@example.com</p>
                <p class="text-gray-700 mb-4"><strong>Address:</strong> 123 Main Street, City, Country</p>
                
                <h2 class="text-2xl font-semibold mb-4">Location</h2>
                <p class="text-gray-700 mb-2"><strong>Office Hours:</strong></p>
                <p class="text-gray-700 mb-2">Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p class="text-gray-700">Saturday: 10:00 AM - 4:00 PM</p>
            </div>
        </div>

        <!-- Form Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Submit Your Payment</h2>
            <form action="#" method="POST" class="space-y-4">
                <!-- Dollar Amount Field -->
                <div>
                    <label for="amount" class="block text-gray-700 font-semibold mb-2">Dollar Amount</label>
                    <input type="number" step="0.01" id="amount" name="amount" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Transaction ID Field -->
                <div>
                    <label for="transaction-id" class="block text-gray-700 font-semibold mb-2">Transaction ID</label>
                    <input type="text" id="transaction-id" name="transaction-id" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
