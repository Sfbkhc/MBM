<!-- Hero Section -->
<div class="relative w-full h-[200px] md:h-[70vh] lg:h-[200px] mx-auto max-w-7xl mt-22 lg:mt-20 mb-0 overflow-hidden">
    <div class="absolut rounded-xl">
        <div class="slide fade">
            <img src="{{ asset('image/bg/mining-440743_1920.jpg') }}" alt="Hero Image 2" class="w-full h-full object-cover px-2 py-4  " loading="lazy">
        </div>
        <div class="slide fade">
            <img src="{{ asset('image/bg/mining-440743_1920.jpg') }}" alt="Hero Image 2" class="w-full h-full object-cover px-2 py-4  " loading="lazy">
        </div>
        <div class="slide fade">
            <img src="{{ asset('image/bg/presdirbanner.webp') }}" alt="Hero Image 3" class="w-full h-full object-cover  shadow-lg px-2 py-4  " loading="lazy">
        </div>
    </div>

    <!-- Navigasi -->
    <!-- <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-lg" onclick="plusSlides(-1)">&#10094;</button> -->
    <!-- <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-lg" onclick="plusSlides(1)">&#10095;</button> -->

    <!-- Dots -->
    <div class="flex justify-center mt-4 ">
        <span class="dot w-1 h-1 bg-gray-300 rounded-full mx-1 cursor-pointer" onclick="currentSlide(1)"></span>
        <span class="dot w-1 h-1 bg-gray-300 rounded-full mx-1 cursor-pointer" onclick="currentSlide(2)"></span>
        <span class="dot w-1 h-1 bg-gray-300 rounded-full mx-1 cursor-pointer" onclick="currentSlide(3)"></span>
    </div>
</div>


<!-- Profile Section dengan Caption -->
<div class="container mx-auto px-4 py-12 md:py-16]">
    <h1 class="text-black font-bold text-center text-3xl font-bold pb-5">Tentang Kami</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="relative transition my-element">
            <img src="{{ asset('image/person/Pak zumadi.jpg') }}" alt="Profile Image" class="w-full rounded-lg shadow-lg">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                <h3 class="text-white text-sm font-bold">Pak Zumadi</h3>
                <p class="text-xs text-white font-bold">Ketua Pembina Yayasan Mandala Bina Mandiri</p>
            </div>
        </div>
        <div class="space-y-4 ">
            <h2 class="text-2xl md:text-4xl font-bold text-gray-800 my-element">Sambutan Ketua Pembina Yayasan</h2>
            <p class="text-gray-600 text-justify lg:text-left leading-relaxed animate-fade-in-up">
                Yayasan kami berkomitmen untuk berkontribusi dalam berbagai bidang, antara lain pendidikan, kesehatan, media, pertambangan, dan toko ritel. Dengan semangat kebersamaan dan dedikasi yang tinggi, kami berupaya memberikan pelayanan terbaik demi kemajuan bangsa dan kesejahteraan masyarakat.
            </p>
            <p class="text-gray-600 text-justify lg:text-left leading-relaxed animate-fade-in-up">
                Kami berkomitmen untuk membentuk generasi yang berpengetahuan,<br> berkarakter, dan siap menghadapi tantangan global.
            </p>

            <div class="p-4">

                <div class="flex items-center justify-center space-x-2 gap-8 md:gap-4 md:space-x-1  sm:justify-between">
                    <div class="elementor-icon mx-auto block md:flex ">
                        <svg aria-hidden="true" class="e-font-icon-svg w-8 h-8 mx-auto" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M528 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 400H303.2c.9-4.5.8 3.6.8-22.4 0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6 0 26-.2 17.9.8 22.4H48V144h480v288zm-168-80h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm0-64h112c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H360c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm-168 96c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64z"></path>
                        </svg>
                        <p class="hidden lg:flex px-2 py-1 text-xs">Solid Berkualitas</p>
                    </div>
                    <span>|</span>
                    <div class="elementor-icon mx-auto block md:flex ">
                        <svg aria-hidden="true" class="e-font-icon-svg w-8 h-8 mx-auto" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M96 288H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm160 0h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm160 0h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zM96 96H32c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm160 0h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32zm160 0h-64c-17.67 0-32 14.33-32 32v64c0 17.67 14.33 32 32 32h64c17.67 0 32-14.33 32-32v-64c0-17.67-14.33-32-32-32z"></path>
                        </svg>
                        <p class="hidden lg:inline px-2 py-1 text-xs">Mandiri Menuju Harapan Baru</p>
                    </div>
                    <span>|</span>
                    <div class="elementor-icon mx-auto block md:flex ">
                        <svg aria-hidden="true" class="e-font-icon-svg w-8 h-8 mx-auto" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M519.2 127.9l-47.6-47.6A56.252 56.252 0 0 0 432 64H205.2c-14.8 0-29.1 5.9-39.6 16.3L118 127.9H0v255.7h64c17.6 0 31.8-14.2 31.9-31.7h9.1l84.6 76.4c30.9 25.1 73.8 25.7 105.6 3.8 12.5 10.8 26 15.9 41.1 15.9 18.2 0 35.3-7.4 48.8-24 22.1 8.7 48.2 2.6 64-16.8l26.2-32.3c5.6-6.9 9.1-14.8 10.9-23h57.9c.1 17.5 14.4 31.7 31.9 31.7h64V127.9H519.2zM48 351.6c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16c0 8.9-7.2 16-16 16zm390-6.9l-26.1 32.2c-2.8 3.4-7.8 4-11.3 1.2l-23.9-19.4-30 36.5c-6 7.3-15 4.8-18 2.4l-36.8-31.5-15.6 19.2c-13.9 17.1-39.2 19.7-55.3 6.6l-97.3-88H96V175.8h41.9l61.7-61.6c2-.8 3.7-1.5 5.7-2.3H262l-38.7 35.5c-29.4 26.9-31.1 72.3-4.4 101.3 14.8 16.2 61.2 41.2 101.5 4.4l8.2-7.5 108.2 87.8c3.4 2.8 3.9 7.9 1.2 11.3zm106-40.8h-69.2c-2.3-2.8-4.9-5.4-7.7-7.7l-102.7-83.4 12.5-11.4c6.5-6 7-16.1 1-22.6L367 167.1c-6-6.5-16.1-6.9-22.6-1l-55.2 50.6c-9.5 8.7-25.7 9.4-34.6 0-9.3-9.9-8.5-25.1 1.2-33.9l65.6-60.1c7.4-6.8 17-10.5 27-10.5l83.7-.2c2.1 0 4.1.8 5.5 2.3l61.7 61.6H544v128zm48 47.7c-8.8 0-16-7.2-16-16s7.2-16 16 16c0 8.9-7.2 16-16 16z"></path>
                        </svg>
                        <p class="hidden lg:inline px-2 py-1 text-xs">Komitment Untuk Kemajuan Bangsa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Visi Misi Tujuan Section -->
<div class="font-serif bg-white py-12 md:py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Bagian Teks -->
            <div class="flex flex-col justify-center">
                <!-- Visi -->
                <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
                    <li>
                        <div class="timeline-middle">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="h-5 w-5">
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-start mb-10 md:text-end">
                            <time class="font-mono text-black italic">Visi</time>
                            <div class="text-lg font-black">Menjadi yayasan terkemuka yang berkontribusi dalam pengembangan masyarakat melalui inovasi, pendidikan, dan usaha berbasis nilai kebersamaan dan keberlanjutan.</div>
                        </div>
                        <hr />
                    </li>
                    <li>
                        <hr />
                        <div class="timeline-middle">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="h-5 w-5">
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-end md:mb-10">
                            <time class="font-mono text-black italic">Misi</time>
                            <div class="text-lg font-black">Meningkatkan Kesejahteraan Masyarakat, Mengintegrasikan Inovasi dan Keberlanjutan, Menyediakan Layanan Pendidikan Berkualitas, Mendukung Kesehatan dan Kesejahteraan Sosial, Mendorong Kolaborasi dan Sinergi.</div>
                        </div>
                        <hr />
                    </li>
                    <li>
                        <hr />
                        <div class="timeline-middle">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                class="h-5 w-5">
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-start mb-10 md:text-end">
                            <time class="font-mono text-black italic">Tujuan</time>
                            <div class="text-lg font-black">Membangun Fondasi yang Kokoh, Meningkatkan Produktivitas Masyarakat, Menciptakan Lapangan Kerja Baru, Mengurangi Ketimpangan Sosial, Menjadi Contoh Usaha yang Berintegritas.</div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Bagian Foto -->
            <div class="relative  justify-center items-center transition my-element">
                <img src="{{ asset('image/person/Imelda J Kalla (2).jpg') }}" alt="Profile Image" class="w-full rounded-lg shadow-lg">
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                    <h3 class="text-white text-sm font-bold">Imelda J Kalla</h3>
                    <p class="text-xs text-white/90">Ketua Yayasan</p>
                </div>
            </div>

        </div>
    </div>
</div>


<section class="py-8">
    <h1 class="text-2xl md:text-3xl font-bold text-center text-black mb-8">Dewan Pembina Yayasan</h1>
    <!-- Container -->
    <div class="hidden md:grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
        <!-- Kolom 1 -->
        <div class="bg-white rounded-lg shadow-md p-4">
            <img
                src="{{ asset('image/person/Pak zumadi.jpg') }}"
                alt="Pak Zumadi"
                class="rounded-md" />
            <h2 class="text-lg font-semibold text-black text-center mt-4 pb-2">Pak Zumadi</h2>
            <p class="text-center text-sm text-black">Ketua Pembina Yayasan</p>
        </div>
        <!-- Kolom 2 -->
        <div class="bg-white rounded-lg shadow-md p-4">
            <img
                src="{{ asset('image/person/Imelda J Kalla (2).jpg') }}"
                alt="Imelda J Kalla"
                class="rounded-md" />
            <h2 class="text-lg font-semibold text-black text-center mt-4 pb-2">Imelda J Kalla</h2>
            <p class="text-center text-sm text-black">Ketua Yayasan</p>
        </div>
        <!-- Kolom 3 -->
        <div class="bg-white rounded-lg shadow-md p-4">
            <img
                src="{{ asset('image/person/ibu disa.jpg') }}"
                alt="Ibu Disa"
                class="rounded-md" />
            <h2 class="text-lg font-semibold text-black text-center mt-4 pb-2">Ibu Disa</h2>
            <p class="text-center text-sm text-black">Wakil Ketua Yayasan</p>
        </div>
    </div>

    <!-- Slider untuk layar kecil -->
    <div class="relative md:hidden space-y-4">
        <div class="swiper">
            <div class="swiper-wrapper mb-2">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <img
                            src="{{ asset('image/person/Pak zumadi.jpg') }}"
                            alt="Pak Zumadi"
                            class="" />
                        <h2 class="text-lg font-semibold text-black text-center mt-4 pb-2">Pak Zumadi</h2>
                        <p class="text-center text-sm text-black">Ketua Pembina Yayasan</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <img
                            src="{{ asset('image/person/Imelda J Kalla (2).jpg') }}"
                            alt="Imelda J Kalla"
                            class="rounded-md" />
                        <h2 class="text-lg font-semibold text-black text-center mt-4 pb-2">Imelda J Kalla</h2>
                        <p class="text-center text-sm text-black">Ketua Yayasan</p>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <img
                            src="{{ asset('image/person/ibu disa.jpg') }}"
                            alt="Ibu Disa"
                            class="rounded-md" />
                        <h2 class="text-lg font-semibold text-black text-center mt-4 pb-2">Ibu Disa</h2>
                        <p class="text-center text-sm text-black">Wakil Ketua Yayasan</p>
                    </div>
                </div>
            </div>
            <!-- Tombol navigasi -->
            <div class="swiper-pagination relative mb-[18px]"></div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Swiper(".swiper", {
            slidesPerView: 1,
            spaceBetween: 16,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    });
</script>