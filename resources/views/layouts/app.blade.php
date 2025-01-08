<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBM</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @if (app()->environment('production'))
    <link rel="stylesheet" href="{{ asset('build/assets/app-DhHkRJue.css') }}">
    @else
    @vite('resources/css/app.css')
    @endif
</head>

<body class="font-body bg-white">
    <div class="bg-white relative isolate  ">
        <x-navbar />
        <x-hero-section />
        <x-sectin-profile />
        <x-bussines />
        <x-about-section />
    </div>


    <!-- Blog Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">Latest News</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Blog Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="{{asset('image/blog/blog-1.jpg')}}" alt="Blog 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-4">Blog Title</h3>
                        <p class="text-gray-600 mb-4">Blog excerpt goes here...</p>
                        <a href="#" class="text-[#362FD9] font-semibold hover:text-blue-700">Read More →</a>
                    </div>
                </div>
                <!-- Repeat for other blog cards -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <img src="{{asset('image/logo/logo.png')}}" alt="Logo" class="h-12 mb-6">
                    <p class="text-gray-600">Short description about MBM Education</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-[#362FD9]">Home</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#362FD9]">About</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#362FD9]">Services</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-[#362FD9]">Contact</a></li>
                    </ul>
                </div>
                <!-- Repeat for other footer columns -->
            </div>
            <div class="border-t border-gray-200 mt-12 pt-8 text-center">
                <p class="text-gray-600">&copy; 2024 Yayasan Mandala Bina Mandiri . All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Add any necessary JavaScript here
    </script>
</body>

</html>