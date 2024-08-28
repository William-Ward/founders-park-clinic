
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
                <!-- <p class="text-gray-700 mb-2"><strong>Phone:</strong> (605) 391-2691</p> -->
                <p class="text-gray-700 mb-2"><strong>Phone:</strong> 605-791-5959</p>
                <p class="text-gray-700 mb-2"><strong>Fax:</strong> 605-791-5960</p>
                <p class="text-gray-700 mb-2"><strong>After hours:</strong> 605-391-2691</p>

                <h2 class="text-2xl font-semibold mb-4">Location</h2>
                <p class="text-gray-700 mb-2">211 Founders Park Dr. Suite 3</p>
                <p class="text-gray-700 mb-2">Rapid City SD, 57701</p>
                
                <p class="text-gray-700 mb-2"><strong>Office Hours</strong></p>
                <p class="text-gray-700 mb-2">Monday - Friday: 8:00 AM - 5:00 PM</p>
                <a href="ROI.pdf" download="Release_Of_Information_Form.pdf"
                    class="mb-4 px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
                    >Download: Release Of Information Form</a>
                <a href="FinalizedLetter.pdf" download="Clinic_Closure_Letter"
                    class="mb-4 px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
                    >Download: Clinic Closure Letter
                </a>
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
