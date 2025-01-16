@extends('layouts.app')
@section('content')


<x-visi-misi />
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        const slides = document.getElementsByClassName("slide");
        const dots = document.getElementsByClassName("dot");

        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" bg-gray-500", " bg-gray-300");
        }

        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " bg-gray-500";
    }

    // Auto slide every 5 seconds
    setInterval(() => {
        plusSlides(1);
    }, 8000); // Ganti 5000 dengan waktu dalam milidetik sesuai kebutuhan
</script>
@endsection