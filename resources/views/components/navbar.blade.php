<nav class="bg-white fixed w-full z-50  shadow-md " x-data="{ open: false }">
    <div class="container mx-auto px-2 py-4">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img
                        src="{{ asset('image/logo/logo.png') }}"
                        alt="Logo STIMIK Bina Bangsa"
                        class="h-32 md:h-24 lg:h-44 " />

                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden px-4">
                <button id="mobile-menu-button" class="text-gray-800 focus:outline-none">
                    <!-- Button to Toggle Menu -->
                    <button @click="open = true" class="text-gray-800 text-xl focus:outline-none">
                        ☰
                    </button>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-8" id="desktop-menu">
                <a href="#section" class="nav link text-gray-800 hover:text-[#362FD9] font-medium">Beranda</a>
                <a href="#Tentang" class="text-gray-800 hover:text-[#362FD9] font-medium">Tentang Kami</a>

                <!-- Dropdown Menu -->
                <div class="relative group">
                    <button class="flex items-center text-gray-800 hover:text-[#362FD9] font-medium">
                        <span>Satuan Pendidikan</span>
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute hidden group-hover:block w-48 bg-white shadow-lg py-2 mt-2 rounded-lg">
                        <a href="/pendidikan/tk" class="block px-4 py-2 text-gray-800 hover:bg-[#362FD9] hover:text-white">TK</a>
                        <a href="/pendidikan/kursus" class="block px-4 py-2 text-gray-800 hover:bg-[#362FD9] hover:text-white">Kursus</a>
                    </div>
                </div>

                <a href="/berita" class="text-gray-800 hover:text-[#362FD9] font-medium">Berita</a>
                <a href="/kontak" class="text-gray-800 hover:text-[#362FD9] font-medium">Kontak</a>
            </div>
            <a href="/" class="hidden lg:block bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition duration-300">
                Sigin | Login
            </a>
        </div>
    </div>


    <!-- Mobile Menu -->
    <div class="lg:hidden">


        <!-- Overlay and Menu -->
        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-4"
            class="transition-opacity-transform duration-enter ease-in-out fixed inset-0 bg-white shadow-lg z-50 px-4 py-4">
            <!-- Header with Logo and Close Button -->
            <div class="flex items-center justify-between mb-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="{{asset('image/logo/logo.png')}}" alt="Logo" class="h-32">
                    <!-- <span class="ml-2 text-lg font-bold text-gray-800">Mandala Bina Mandiri</span> -->
                </div>
                <!-- Close Button -->
                <button @click="open = false" class="text-gray-800 text-2xl focus:outline-none">
                    &times;
                </button>
            </div>

            <!-- Menu Content -->
            <div>
                <a href="/" class="block px-4 py-2 text-gray-800 hover:bg-[#362FD9] hover:text-white">Beranda</a>
                <a href="/tentang-kami" class="block px-4 py-2 text-gray-800 hover:bg-[#362FD9] hover:text-white">Tentang Kami</a>
                <div class="relative group">
                    <button class="flex items-center text-gray-800 hover:text-[#362FD9] font-medium">
                        <span>Satuan Pendidikan</span>
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute hidden group-hover:block w-48 bg-white shadow-lg py-2 mt-2 rounded-lg">
                        <a href="/pendidikan/tk" class="block px-4 py-2 text-gray-800 hover:bg-[#362FD9] hover:text-white">TK</a>
                        <a href="/pendidikan/kursus" class="block px-4 py-2 text-gray-800 hover:bg-[#362FD9] hover:text-white">Kursus</a>
                    </div>
                </div>
                <a href="/berita" class="block px-4 py-2 text-gray-800 hover:bg-[#362FD9] hover:text-white">Berita</a>
                <a href="/kontak" class="block px-4 py-2 text-gray-800 hover:bg-[#362FD9] hover:text-white">Kontak</a>
                <a href="/" class="block text-center bg-blue-600 text-white px-2 py-2 rounded-full hover:bg-blue-700 transition duration-300">
                    Signin | Login
                </a>
            </div>
        </div>
    </div>




</nav>