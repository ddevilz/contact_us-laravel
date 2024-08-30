<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black">

   <x-navbar />
    <div class="container mx-auto py-12">
        <h1 class="text-white text-4xl font-bold text-center mb-8">Contact Us</h1>
        
        <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" id="name" name="name" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                </div>
                
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
                </div>
                
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                    <textarea id="message" name="message" rows="5" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="bg-purple-600 text-white px-6 py-2 rounded-full font-bold text-lg hover:bg-purple-700 transition duration-300">Send Message</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
