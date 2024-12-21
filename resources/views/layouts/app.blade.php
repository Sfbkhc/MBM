<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Yayasan Bina Mandiri</title>
</head>

<body class="">

    <x-navbar />
    <main>
        @yield('content')
    </main>
    <footer class="bg-gray-800 text-white p-4 mt-4">
        <div class="container mx-auto text-center">
            &copy; 2024 My Portfolio. All rights reserved.
        </div>
    </footer>
</body>

</html>