<nav class="bg-white fixed w-full z-50 shadow-md" x-data="{ mobileMenuOpen: false, changeLanguage(locale) { window.location.href = `/language/${locale}`; } }">
    <div class="container mx-auto px-2 py-2 font-serif">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('image/logo/logo-1.png') }}" alt="Logo STIMIK Bina Bangsa" class="h-14 md:h-24 lg:h-14" />
                    <div class="mb-[-7px] ml-[-3px] mr-1 w-[2px] h-10 rounded-sm bg-gray-800"></div>
                    <div class="flex-rows space-y-[-5px] text-gray-800">
                        <p>Mandala</p>
                        <p>Bina Mandiri</p>
                    </div>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden md:hidden px-4">
                <button @click="mobileMenuOpen = true" class="text-gray-800 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-8" id="desktop-menu">
                <a href="#section" class="text-gray-800 hover:text-[#ff3744] font-boldmedium">Home</a>
                <a href="#Tentang" class="text-gray-800 hover:text-[#ff3744] font-boldmedium">Tentang Mandala</a>

                <!-- Dropdown Menu -->
                <div class="relative" x-data="{ open: false }">
                    <button class="flex items-center text-gray-800 font-boldmedium" @click="open = !open" @click.away="open = false">
                        <span>Bisnis</span>
                        <svg class="w-4 h-4 ml-1" :class="{ 'transform rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute w-52 bg-white shadow-lg py-4 px-4 mt-2 border border-gray-200 rounded-lg" x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 scale-95" style="display: none;">
                        <a href="/pendidikan/kursus" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] rounded-lg hover:text-white">Media Informasi</a>
                        <div class="relative" x-data="{ pendidikanOpen: false }">
                            <button @mouseover="pendidikanOpen = true" @mouseleave="pendidikanOpen = false"
                                class="w-full flex justify-between items-center px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">
                                <span>Pendidikan</span>
                                <!-- <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg> -->
                            </button>
                            <!-- Sub menu items -->
                            <div x-show="pendidikanOpen" @mouseover="pendidikanOpen = true" @mouseleave="pendidikanOpen = false"
                                class="absolute left-full top-0 ml-1 w-[250px] bg-white rounded-lg shadow-lg py-4 px-4"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95">
                                <a href="/pendidikan/tk" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg">Taman Kanak-kanak</a>
                                <a href="/pendidikan/sd" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg">Sekolah Dasar</a>
                                <a href="/pendidikan/smp" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg">Sekolah Menengah Pertama</a>
                                <a href="/pendidikan/kursus" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg">Lembaga Kursus</a>
                            </div>
                        </div>
                        <a href="/pendidikan/kursus" class="block px-4 py-2 text-gray-800  hover:bg-[#ff3744] rounded-lg hover:text-white">Percetakan</a>
                        <a href=" /pendidikan/kursus" class="block px-4 py-2 text-gray-800  hover:bg-[#ff3744] rounded-lg hover:text-white">Kesehatan</a>
                        <a href=" /pendidikan/kursus" class="block px-4 py-2 text-gray-800  hover:bg-[#ff3744] rounded-lg hover:text-white">Toko ATK</a>
                    </div>
                </div>

                <a href="/Berita" class="text-gray-800 hover:text-[#ff3744] font-boldmedium">Berita</a>
                <a href="/Kontak" class="text-gray-800 hover:text-[#ff3744] font-boldmedium">Kontak</a>
                <a href="/Album" class="text-gray-800 hover:text-[#ff3744] font-boldmedium">Album</a>
            </div>

            <!-- Search and Language Section -->
            <div class="items-center space-x-4 hidden lg:flex">
                <!-- Search Button & Input -->
                <div class="relative" x-data="{ isSearchOpen: false }">
                    <button @click="isSearchOpen = !isSearchOpen" class="p-2 text-gray-700 hover:text-[#ff3744] rounded-full hover:bg-gray-100 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>

                    <!-- Search Input -->
                    <div x-show="isSearchOpen" @click.away="isSearchOpen = false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 mt-2 w-72 md:w-96 bg-white rounded-lg shadow-lg p-2 z-50">
                        <form class="flex items-center">
                            <input type="text" placeholder="Cari..." class="w-full px-4 py-2 rounded-lg border bg-gray-200 focus:outline-none focus:border-[#ff3744]">
                            <button type="submit" class="ml-2 p-2 text-gray-700 hover:text-[#ff3744] rounded-full hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Desktop Language Selector -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false" class="flex items-center space-x-1 px-2 py-1 rounded-lg bg-[#ff3744] hover:bg-gray-200 text-white hover:text-[#ff3744] border-transparant">
                        <span class="hidden sm:inline">{{ strtoupper(app()->getLocale()) }}</span>
                        <svg class="w-4 h-4" :class="{ 'transform rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div x-show="open" x-cloak @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-50">
                        <button @click="changeLanguage('id')" class="flex items-center w-full px-4 py-2 text-left text-gray-700 hover:bg-[#ff3744] hover:text-white rounded-t-lg">
                            <span class="ml-2">Bahasa Indonesia</span>
                        </button>
                        <button @click="changeLanguage('en')" class="flex items-center w-full px-4 py-2 text-left text-gray-700 hover:bg-[#ff3744] hover:text-white">
                            <span class="ml-2">English</span>
                        </button>
                        <button @click="changeLanguage('zh')" class="flex items-center w-full px-4 py-2 text-left text-gray-700 hover:bg-[#ff3744] hover:text-white rounded-b-lg">
                            <span class="ml-2">中文</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="lg:hidden md:hidden">
            <!-- Mobile Menu Overlay -->
            <div @keydown.escape="mobileMenuOpen = false">
                <!-- Backdrop -->
                <div x-show="mobileMenuOpen" class="fixed inset-0 bg-black bg-opacity-50 z-40" @click="mobileMenuOpen = false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-cloak></div>

                <!-- Mobile Menu Panel -->
                <div x-show="mobileMenuOpen" class="fixed inset-y-0 right-0 max-w-xs w-full bg-white shadow-xl z-50" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-cloak>
                    <!-- Menu Header with Close Button -->
                    <div class="flex items-center justify-between p-4 border-b">
                        <div class="flex items-center">
                            <img src="{{ asset('image/logo/logo.png') }}" alt="Logo" class="h-16">
                        </div>
                        <button @click="mobileMenuOpen = false" class="p-2 rounded-full hover:bg-gray-100 transition-colors duration-200 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 hover:text-[#ff3744]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Menu Content -->
                    <div class="overflow-y-auto h-full pb-20">
                        <nav class="p-4 space-y-4">
                            <a href="/" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Beranda</a>
                            <a href="/tentang-kami" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Tentang Mandala</a>

                            <!-- Menu Bisnis dengan Dropdown -->
                            <div x-data="{ isOpen: false }" class="relative">
                                <button @click="isOpen = !isOpen" class="w-full flex justify-between items-center px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">
                                    <span>Bisnis</span>
                                    <svg class="w-4 h-4" :class="{ 'transform rotate-180': isOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div x-show="isOpen" class="pl-4 mt-2 space-y-2">
                                    <a href="/pendidikan/kursus" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Media Informasi</a>

                                    <!-- Sub menu Pendidikan -->
                                    <div x-data="{ isOpen: false, pendidikanOpen: false }" class="relative" @click.away="isOpen = false; pendidikanOpen = false">
                                        <button @click="isOpen = !isOpen" class="w-full flex justify-between items-center px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">
                                            <span>Bisnis</span>
                                            <svg class="w-4 h-4" :class="{ 'transform rotate-180': isOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                        <div x-show="isOpen" class="pl-4 mt-2 space-y-2">
                                            <!-- Submenu Pendidikan -->
                                            <div class="relative">
                                                <button @click="pendidikanOpen = !pendidikanOpen" class="w-full flex justify-between items-center px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">
                                                    <span>Pendidikan</span>
                                                    <svg class="w-4 h-4" :class="{ 'transform rotate-180': pendidikanOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                    </svg>
                                                </button>
                                                <div x-show="pendidikanOpen" class="ml-4 mt-2 space-y-2">
                                                    <a href="/pendidikan/tk" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Taman Kanak-kanak</a>
                                                    <a href="/pendidikan/sd" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Sekolah Dasar</a>
                                                    <a href="/pendidikan/smp" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Sekolah Menengah Pertama</a>
                                                    <a href="/pendidikan/kursus" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Lembaga Kursus</a>
                                                </div>
                                            </div>
                                            <!-- Item lainnya -->
                                        </div>
                                    </div>


                                    <a href="/pendidikan/kursus" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Percetakan</a>
                                    <a href="/pendidikan/kursus" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Kesehatan</a>
                                    <a href="/pendidikan/kursus" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Toko ATK</a>
                                </div>
                            </div>

                            <a href="/berita" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Berita</a>
                            <a href="/kontak" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Kontak</a>
                            <a href="/album" class="block px-4 py-2 text-gray-800 hover:bg-[#ff3744] hover:text-white rounded-lg transition-colors duration-200">Album</a>
                        </nav>
                        <!-- Mobile Search -->
                        <div class="p-4">
                            <form class="flex items-center bg-gray-100 rounded-lg p-2">
                                <input type="text" placeholder="Cari..." class="w-full bg-transparent border-none focus:outline-none px-2">
                                <button type="submit" class="p-2 text-gray-600 hover:text-[#ff3744]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </button>
                            </form>
                        </div>

                        <!-- Mobile Language Selector -->
                        <div class="p-4 flex justify-center space-x-4">
                            <button @click="changeLanguage('id')" class="px-4 py-2 text-gray-700 hover:text-[#ff3744] font-boldmedium">ID</button>
                            <button @click="changeLanguage('en')" class="px-4 py-2 text-gray-700 hover:text-[#ff3744] font-boldmedium">EN</button>
                            <button @click="changeLanguage('zh')" class="px-4 py-2 text-gray-700 hover:text-[#ff3744] font-boldmedium">中文</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>