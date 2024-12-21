@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gray-900 text-white py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-4">Welcome to My Portfolio</h2>
        <p class="text-lg mb-8">Showcasing my projects and skills</p>
        <a href="#" class="bg-blue-500 text-white px-6 py-3 rounded">Get Started</a>
    </div>
</section>

<!-- Blog Section -->
<section class="py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-12">Latest Blog Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-2xl font-bold mb-4">Blog Post Title 1</h3>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis at odio bibendum rhoncus.</p>
                <a href="#" class="text-blue-500">Read More</a>
            </div>
            <!-- Blog Post 2 -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-2xl font-bold mb-4">Blog Post Title 2</h3>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis at odio bibendum rhoncus.</p>
                <a href="#" class="text-blue-500">Read More</a>
            </div>
            <!-- Blog Post 3 -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-2xl font-bold mb-4">Blog Post Title 3</h3>
                <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis at odio bibendum rhoncus.</p>
                <a href="#" class="text-blue-500">Read More</a>
            </div>
        </div>
    </div>
</section>
@endsection