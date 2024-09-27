@extends('layouts.landing')

@section('content')
<div class="p-auto">
    <div class="relative bg-gray-900 text-white shadow-lg overflow-hidden cursor-pointer h-80" style="background-image: url('{{ asset('images/image-3.jpg') }}'); background-size: cover; background-position: center; opacity: 40%;">
        <div class="absolute inset-0 bg-black opacity-25"></div>  
        <div class="absolute inset-0 bg-opacity-40 flex items-center justify-center">
            <h2 class="text-4xl sm:text-7xl font-bold text-center text-white drop-shadow-md">Mission & Vision</h2>
        </div>
    </div>
</div>

<div class="container-fluid mt-8">
    <section class="flex flex-col md:flex-row justify-start p-10">
        <div class="w-full md:w-1/3 p-6 flex items-center">
            <img src="{{ asset('images/about-1.jpg') }}" alt="About" class="w-full h-auto object-cover">
        </div>
        <div class="w-full md:w-2/3 p-10 flex flex-col justify-center">
            <section class="mb-6">
                <h2 class="text-2xl font-bold text-blue-600 mb-2">Our Mission</h2>
                <p class="text-lg">
                    To deliver high-quality care to improve and maintain a healthy quality of life for all people while using a holistic, person-centered approach in the delivery of medical and non-medical home care, social services, and supports.
                </p>
            </section>
            <section class="mb-6">
                <h2 class="text-2xl font-bold text-blue-600 mb-2">Our Vision</h2>
                <p class="text-lg">
                    To become a world-class leader and preferred home care organization by continually evaluating and improving our practices, ensuring our patients always receive exceptional services and care.
                </p>
            </section>
            <section class="bg-white">
                <h3 class="text-2xl font-bold text-blue-600 mb-4">Our Values</h3>
                <p class="text-md mb-4">At MediHome, our values guide everything we do. They are the cornerstone of our commitment to excellence and our promise to our patients and community.</p>
                <div class="flex flex-wrap">
                    <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg mr-2 mb-2">Empathy</span>
                    <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg mr-2 mb-2">Respect</span>
                    <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg mr-2 mb-2">Integrity</span>
                    <span class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg mr-2 mb-2">Innovation</span>
                </div>
            </section>
        </div>
    </section>
</div>

<div class="container-fluid bg-gray-200 p-10 flex flex-col md:flex-row justify-between ">
<div class="w-full md:w-2/3 p-6">
    <h3 class="text-3xl font-extrabold text-blue-700 mb-4">MEDIHOME TEAM & STAFF STRENGTH</h3>
    <p class="text-lg mb-4">
        Our medical team consists of dedicated professionals:
    </p>
    <ul class="list-disc pl-5 mt-2 text-lg">
        <li class="mb-2">High-ranking medical consultants from different specialties</li>
        <li class="mb-2">Specialist nurses</li>
        <li class="mb-2">Physical therapists</li>
        <li class="mb-2">Laboratory scientists</li>
        <li class="mb-2">Clinical pharmacists</li>
        <li class="mb-2">Dieticians</li>
        <li class="mb-2">Professional caregivers</li>
    </ul>
</div>
    <div class="w-full md:w-1/3 p-6 flex items-center">
        <img src="{{ asset('images/about-1.jpg') }}" alt="About" class="w-full h-auto object-cover">
    </div>
</div>

@endsection
