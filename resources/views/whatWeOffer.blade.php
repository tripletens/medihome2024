@extends('layouts.landing')

@section('content')
<div class="p-auto">
    <div class="relative bg-gray-900 text-white shadow-lg overflow-hidden cursor-pointer h-80" style="background-image: url('{{ asset('images/image-3.jpg') }}'); background-size: cover; background-position: center; opacity-40;">
        <div class="absolute inset-0 bg-black opacity-25"></div>  
        <div class="absolute inset-0 bg-opacity-40 flex items-center justify-center">
            <h2 class="text-4xl sm:text-7xl font-bold text-center text-white drop-shadow-md">What We Offer</h2>
        </div>
    </div>
</div>


<div class="container-fluid mt-8 ">
<section class="flex flex-col md:flex-row justify-start p-10 ">
    <div class="w-full md:w-1/3 p-6 flex items-center">
        <img src="{{ asset('images/about-1.jpg') }}" alt="About" class="w-full h-auto object-cover">
    </div>
    <div class="w-full md:w-2/3 p-10 flex flex-col justify-start">
        <h3 class="text-3xl font-extrabold text-blue-700 mb-4">Meet Our Medical Experts</h3>
        <p class="text-xl text-gray-600 mb-4">
            Our team comprises a diverse range of dedicated professionals, each bringing their own unique expertise to our practice:
        </p>
        <ul class="list-disc pl-5 text-gray-700 text-xl">
            <li class="mb-2">Consultants with advanced qualifications across various specialties</li>
            <li class="mb-2">Specialized Nursing Staff</li>
            <li class="mb-2">Expert Physical Therapists</li>
            <li class="mb-2">Skilled Laboratory Scientists</li>
            <li class="mb-2">Experienced Clinical Pharmacists</li>
            <li class="mb-2">Certified Dieticians</li>
            <li class="mb-2">Compassionate Professional Caregivers</li>
        </ul>
    </div>
</section>
</div>
<section class="bg-gray-200">
<div class="container-fluid p-10 flex flex-col md:flex-row justify-between">
    <div class="w-full md:w-2/3 p-6">
        <h3 class="text-3xl font-extrabold text-blue-700 mb-4">Our Commitment to You</h3>
        <p class="text-xl text-gray-600 mb-4">
            We are dedicated to providing exceptional care through a team of experienced professionals.
        </p>
        <ul class="list-disc pl-5 text-gray-700 text-xl">
            <li class="mb-4">Comprehensive care plans tailored to individual needs</li>
            <li class="mb-4">State-of-the-art facilities and technology</li>
            <li class="mb-4">Holistic approach to health and wellness</li>
        </ul>
    </div>
    <div class="w-full md:w-1/3 p-6 flex items-center">
        <img src="{{ asset('images/about-1.jpg') }}" alt="About" class="w-full h-auto object-cover">
    </div>
</div>
</section>
@endsection