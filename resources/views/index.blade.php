@extends('layouts.landing')

@section('content')
<div class="bg-white-300 my-6 flex flex-col items-center justify-center h-screen">
    <div class="relative -mt-5 w-full h-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/banner-1.jpg') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-start justify-center h-full sm:p-20 pl-5">
            <h2 class="text-xl font-bold text-white mb-5">Change the World</h2>
            <h1 class="text-5xl mb-3 sm:text-7xl font-semibold text-white">Love and Care <br> for Seniors</h1>
            <p class="text-lg text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem facere sunt, minima earum iusto, sit necessitatibus excepturi, quod odit nostrum magni est soluta perspiciatis magnam vel aperiam harum fuga! Aperiam!</p>
            <div class="pt-4">
                <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-3 px-5 rounded">
                    Discover More
                </button>
            </div>
        </div>
    </div>

    <div class="bottom-div bg-white">
        </div>
    <div class="relative w-full" style="margin-bottom: -5px;">
        <div class="wave-container absolute bottom-1 left-0 right-0">
            <img src="{{ asset('images/banner-shape.svg') }}" alt="Wave" class="w-full h-auto object-cover" style="margin-bottom: -5px;">
        </div>
    </div>
</div>

<section class="bg-white p-6 mt-12">
    <h3 class="text-center text-2xl mb-4">What We Offers</h3>
    <h1 class="text-center text-4xl font-bold">Everyone Deserves Our Best Services</h1>

    <div class="flex flex-col md:flex-row justify-center items-center mt-8 p-10 space-y-10 md:space-y-0 md:space-x-10">
    <div class="w-30 md:w-1/3 p-6 text-center cursor-pointer bg-[#2F5E99] card hover:bg-blue-500 transition duration-300 ease-in-out rounded-lg shadow-md h-[400px] flex flex-col justify-between">
    <div class="pt-4 icon-container flex flex-col justify-center items-center">
        <img src="{{ asset('images/person-cane-solid-white.svg') }}" alt="elderly" class="icon normal-icon w-20 text-center">
        <h4 class="text-2xl font-semibold text-white mt-4">Assisted Living</h4>
        <p class="text-white mt-4">Amet congue lacus, vitae leo molestie pretium mauris sed nibh. Facilisis lacinia vesbulum tindunt aliquam.</p>
    </div>
    <div>
        <button class="bg-orange-500 text-white px-4 py-2 rounded transition duration-300 hover:bg-orange-700">
            Learn More
        </button>
    </div>
</div>

<div class="w-30 md:w-1/3 p-6 text-center cursor-pointer bg-[#2F5E99] card hover:bg-blue-500 transition duration-300 ease-in-out rounded-lg shadow-md h-[400px] flex flex-col justify-between">
    <div class="pt-4 icon-container flex flex-col justify-center items-center">
        <img src="{{ asset('images/stethoscope-solid.svg') }}" alt="Medical&Health" class="icon normal-icon w-20 text-center">
        <h4 class="text-2xl font-semibold text-white mt-4">Medical & Health</h4>
        <p class="text-white mt-4">Amet congue lacus, vitae leo molestie pretium mauris sed nibh. Facilisis lacinia vesbulum tindunt aliquam.</p>
    </div>
    <div>
        <button class="bg-orange-500 text-white px-4 py-2 rounded transition duration-300 hover:bg-orange-700">
            Learn More
        </button>
    </div>
</div>

<div class="w-30 md:w-1/3 p-6 text-center cursor-pointer bg-[#2F5E99] card hover:bg-blue-500 transition duration-300 ease-in-out rounded-lg shadow-md h-[400px] flex flex-col justify-between">
    <div class="pt-4 icon-container flex flex-col justify-center items-center">
        <img src="{{ asset('images/house-medical-solid.svg') }}" alt="Medical&Health" class="icon normal-icon w-20 text-center">
        <h4 class="text-2xl font-semibold text-white mt-4">Residential Care</h4>
        <p class="text-white mt-4">Amet congue lacus, vitae leo molestie pretium mauris sed nibh. Facilisis lacinia vesbulum tindunt aliquam.</p>
    </div>
    <div>
        <button class="bg-orange-500 text-white px-4 py-2 rounded transition duration-300 hover:bg-orange-700">
            Learn More
        </button>
    </div>
</div>

    </div>
</section>
<section class="flex flex-col md:flex-row justify-start mt-5 p-10">
    <div class="w-full md:w-1/3 p-6 flex items-center">
        <img src="{{ asset('images/about-1.jpg') }}" alt="about" class="w-full h-100 object-cover">
    </div>

    <div class="w-full md:w-2/3 p-6 flex flex-col justify-start">
        <h3 class="text-xl font-bold text-gray-900 mb-2">About Medihomecare</h3>
        <h1 class="text-3xl sm:text-4xl font-semibold text-gray-700">
            Learn About Our
            Senior Care Agency
        </h1>
        <p class="pt-3 text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem facere sunt, minima earum iusto, sit necessitatibus excepturi, quod odit nostrum magni est soluta perspiciatis magnam vel aperiam harum fuga! Aperiam!</p>
        <div class="pt-3">
        <ul class="space-y-2 p-2 text-lg list-none">
    <li class="flex items-start space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#2F5E99"><path d="m424-312 282-282-56-56-226 226-114-114-56 56 170 170ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/></svg>
        <p >Access control put an electric vehicle charge.</p>
    </li>
    <li class="flex items-start space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#2F5E99"><path d="m424-312 282-282-56-56-226 226-114-114-56 56 170 170ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/></svg>
        <p >Access control put an electric vehicle charge.</p>
    </li>
    <li class="flex items-start space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#2F5E99"><path d="m424-312 282-282-56-56-226 226-114-114-56 56 170 170ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z"/></svg>
        <p >Access control put an electric vehicle charge.</p>
    </li>
</ul>
</div>
<div class="flex justify-center sm:justify-start items-center p-auto my-3">
    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-3 px-5 rounded">
        Read More
    </button>
</div>
    </div>
</section>

<section class="bg-white p-20">
    <h3 class="text-center text-xl font-bold text-gray-900 mb-2">Our Duty</h3>
    <h1 class="text-center text-4xl font-bold mb-5">We Take Care of Your Problems Carefully</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-auto">
    <!-- Card 1 -->
    <div class="relative bg-gray-900 text-white rounded-lg shadow-lg overflow-hidden group">
    <img src="{{ asset('images/image-1.jpg') }}" alt="" class="w-full h-64 object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        </div>
        <div class="p-6 flex flex-col justify-between">
            <h4 class="text-xl font-semibold mb-4">Specialist Nursing Care</h4>
            <p class="mb-4">Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit officia consequt.</p>
            <div class="mb-4">
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="relative bg-gray-900 text-white rounded-lg shadow-lg overflow-hidden group">
    <img src="{{ asset('images/image-2.jpg') }}" alt="" class="w-full h-64 object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        </div>
        <div class="p-6 flex flex-col justify-between">
            <h4 class="text-xl font-semibold mb-4">Provide Home Visit Care</h4>
            <p class="mb-4">Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit officia consequt.</p>
            <div class="mb-4">
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="relative bg-gray-900 text-white rounded-lg shadow-lg overflow-hidden group">
    <img src="{{ asset('images/image-3.jpg') }}" alt="" class="w-full h-64 object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        </div>
        <div class="p-6 flex flex-col justify-between">
            <h4 class="text-xl font-semibold mb-4">Relatives Accommodation</h4>
            <p class="mb-4">Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit officia consequt.</p>
            <div class="mb-4">
            </div>
        </div>
    </div>
</div>
</section>
<section class="m-20">
<div class="relative bg-gray-900 text-white rounded-3xl shadow-lg overflow-hidden cursor-pointer h-80">
    <img src="{{ asset('images/image-3.jpg') }}" alt="Background Image" class="w-full h-100 object-cover opacity-50">
    
    <div class="absolute inset-0 bg-opacity-60 flex flex-col items-center justify-center text-center ">
        <h2 class="text-4xl  sm:text-7xl font-bold mb-4">Contact Us</h2>
        <p class="mb-6 text-xl mx-3 sm:mx-auto sm:text-2xl">We would love to hear from you! Reach out to us for any inquiries or support.</p>
        <a href="#" class="bg-orange-500 text-white font-semibold px-6 py-3 rounded transition duration-300 hover:bg-orange-700">Get in Touch</a>
    </div>
</div>
</section>

@endsection