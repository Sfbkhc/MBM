<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBM</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="font-body bg-white">
    <div class="bg-white relative isolate  ">

        <x-navbar />
        <x-hero-section />
        <x-about-section />
    </div>



    <!-- Features Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
                <!-- Feature Card 1 -->
                <div class="bg-[#362FD9] rounded-lg p-6 text-white">
                    <div class="bg-white rounded-sm w-12 h-12 flex items-center justify-center mb-4">
                        <img src="{{asset('image/icons/feature-1.svg')}}" alt="Feature 1" class="w-6 h-6">
                    </div>
                    <h3 class="text-xl font-bold mb-4">Feature Title</h3>
                    <p class="text-gray-200">Feature description goes here</p>
                </div>
                <!-- Repeat for other feature cards -->
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 mb-12 lg:mb-0">
                    <img src="{{asset('image/about-image.png')}}" alt="About Image" class="rounded-lg shadow-xl">
                </div>
                <div class="w-full lg:w-1/2 lg:pl-12">
                    <h2 class="text-4xl font-bold mb-6">About Us</h2>
                    <p class="text-gray-600 mb-8">Detailed description about MBM Education and its mission.</p>
                    <div class="grid grid-cols-2 gap-6">
                        <!-- Stats -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h4 class="text-3xl font-bold text-[#362FD9]">500+</h4>
                            <p class="text-gray-600">Students</p>
                        </div>
                        <!-- Repeat for other stats -->
                    </div>
                </div>
            </div>
        </div>
    </section>

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