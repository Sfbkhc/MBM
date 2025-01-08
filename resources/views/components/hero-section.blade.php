<div class="relative w-full h-[300px] md:h-600 lg:h-[658px] overflow-hidden">
    <!-- Slider container -->
    <div class="flex transition-transform duration-500 ease-in-out font-serif" id="slider">
        <!-- Slide 1 -->
        <div class="min-w-full relative">
            <img src="{{ asset('image/bg/arty-ZyCBQDrW014-unsplash.jpg') }}" alt="Slide 1" class="w-full h-[300px] md:h-600 lg:h-[670px] object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-20 flex items-center justify-center">
                <div class="container mx-auto px-6">
                    <div class="flex flex-wrap items-center mx-auto">
                        <div class="w-2/5">
                            <!-- Testimoni Kanan Atas -->
                            <div class="absolute  right-3 top-12 mr-32 bg-white p-4 rounded-lg shadow-md w-80">
                                <p class="text-gray-700 italic text-sm">"Jika Ingin Sukses Belajarlah Bersabar"</p>
                                <p class="text-gray-900 font-semibold text-xs mt-2">Aril muhammad Fauzan</p>
                                <p class="text-yellow-500 text-xs">★★★★★</p>
                            </div>

                            <!-- Testimoni Kiri Bawah -->
                            <div class="absolute bottom-10 left-15 bg-white p-4 rounded-lg shadow-md w-80">
                                <p class="text-gray-700 italic text-sm">"Pelaut yang hebat tidak lahir dari laut yang tenang"</p>
                                <p class="text-gray-900 font-semibold text-xs mt-2">Panca Rifqi Alfiansyah</p>
                                <p class="text-yellow-500 text-xs">★★★★★</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="min-w-full relative">
            <img src="{{ asset('image/bg/Indonesia_location_map.svg') }}" alt="Slide 2" class="w-full h-[300px] md:h-600 lg:h-[670px] object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <div class="text-center text-white hidden md:block">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Experience Innovation</h1>
                    <p class="text-xl md:text-2xl">Leading the way forward</p>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="min-w-full relative">
            <img src="{{ asset('/image/bg/Lawana_Lanto.jpeg') }}" alt="Slide 3" class="w-full h-[300px] md:h-600 lg:h-[670px] object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                <div class="text-center text-white hidden md:block">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Join Our Community</h1>
                    <p class="text-xl md:text-2xl">Be part of something special</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation buttons -->
    <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 rounded-full p-2" onclick="moveSlide(-1)">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 rounded-full p-2" onclick="moveSlide(1)">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Indicator dots -->
    <div class="absolute bottom-4 lg:bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <button class="h-2 w-2 rounded-full bg-white bg-opacity-50 hover:bg-opacity-75" onclick="goToSlide(0)"></button>
        <button class="h-2 w-2 rounded-full bg-white bg-opacity-50 hover:bg-opacity-75" onclick="goToSlide(1)"></button>
        <button class="h-2 w-2 rounded-full bg-white bg-opacity-50 hover:bg-opacity-75" onclick="goToSlide(2)"></button>
    </div>
</div>

<script>
    let currentSlide = 0;
    const slider = document.getElementById('slider');
    const slides = document.querySelectorAll('#slider > div').length;

    function moveSlide(direction) {
        currentSlide = (currentSlide + direction + slides) % slides;
        updateSlider();
    }

    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateSlider();
    }

    function updateSlider() {
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    // Auto slide every 5 seconds
    setInterval(() => {
        moveSlide(1);
    }, 8000);
</script>