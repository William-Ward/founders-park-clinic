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
<body class="bg-cover bg-gray-900 bg-opacity-50 flex items-center justify-center min-h-screen">
    <div class="container mx-auto p-6 ">
        <!-- Logo Image -->
        <div class="flex justify-center mb-8">
            <img src="images/logo.png" alt="Logo" class="h-24">
        </div>
        <!-- Main Content Section -->
        <div class="text-center mb-8">
            <!-- Title Header -->
            <div class="bg-white p-6 text-center mb-8 rounded-lg shadow-md">
                <h1 class="text-9xl  font-bold text-red-600 mb-4" style="font-size: 2rem; text-align: center;">This Clinic Has Permanently Closed</h1>
            </div>
            <!-- Card Boundary for Paragraphs -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p class="text-lg text-gray-700 mb-4">To request a <u>free</u> copy of your most up-to-date immunization records, please go to
                    <a href="https://doh.sd.gov/topics/immunizations-vaccinations/immunization-records-request/" class="text-blue-500 hover:text-blue-700"><u>https://doh.sd.gov/topics/immunizations-vaccinations/immunization-records-request/</u></a>
                </p>
                <p class="text-lg text-gray-700 mb-4">To request a <u>free</u> copy of your lab results, please go to
                    <a href="https://www.labcorp.com/patients/results" class="text-blue-500 hover:text-blue-700"><u>https://www.labcorp.com/patients/results</u></a>
                </p>
                <p class="text-lg text-gray-700 mb-4">To request a copy of your visit records chart, please go to
                    <a href="http://desertriversolutions.com/requests" class="text-blue-500 hover:text-blue-700"><u>http://desertriversolutions.com/requests</u></a>
                    (a fee may apply)
                </p>
                <p class="text-lg text-gray-700 mb-4">For billing questions, call 
                    <a href="tel:605-391-2691" class="text-blue-500 hover:text-blue-700"><u>605-391-2691</u></a>. 
                    Please leave a message, and we will return your call
                </p>
            </div>
        </div>

        <!-- Form Section -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Pay Bill</h2>
            <form action="create_payment.php" method="POST" class="space-y-4">
                <!-- Transaction ID Field -->
                <div>
                    <label for="account-number" class="block text-gray-700 font-semibold mb-2">Account Number</label>
                    <input type="text" id="account-number" name="account-number" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Dollar Amount Field -->
                <div>
                    <label for="amount" class="block text-gray-700 font-semibold mb-2">Dollar Amount</label>
                    <input type="number" step="0.01" id="amount" name="amount" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <!-- Submit Button -->
                <div>
                    <button type="submit" min="0.01" step="0.01" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Continue
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
