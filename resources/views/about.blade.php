@extends('layouts.landing')

@section('content')
<div class="p-auto">
    <div class="relative bg-gray-900 text-white shadow-lg overflow-hidden cursor-pointer h-80" style="background-image: url('{{ asset('images/image-3.jpg') }}'); background-size: cover; background-position: center; opacity-40;">
        <div class="absolute inset-0 bg-black opacity-25"></div>  
        <div class="absolute inset-0 bg-opacity-40 flex items-center justify-center">
            <h2 class="text-4xl sm:text-7xl font-bold text-center text-white drop-shadow-md">About Us</h2>
        </div>
    </div>
</div>


<div class="container-fluid mt-8">
    <section class="flex flex-col md:flex-row justify-start p-10">
        <div class="w-full md:w-1/3 p-6 flex items-center">
            <img src="{{ asset('images/about-1.jpg') }}" alt="About" class="w-full h-auto object-cover">
        </div>
        <div class="w-full md:w-2/3 p-6 flex flex-col justify-start">
            <h3 class="text-2xl font-bold mb-4 text-blue-700">About Medihomecare</h3>
            <h1 class="text-3xl sm:text-3xl font-semibold text-gray-700">
                Learn About Our
                Medihome
                Care Agency
            </h1>
            <p class="pt-3 text-lg">
                At MEDIHOME, we are dedicated to providing exceptional care as if our own loved ones were receiving it. Our skilled team offers in-home services with a focus on quality and compassion. <br> 
                During the Coronavirus pandemic, we maintained high standards by adhering to COVID-19 protocols, including protective equipment, sanitization, and regular testing. 
                <br>This commitment has earned us recognition as one of Nigeria’s top home care providers. With a proven track record and strong reputation, MEDIHOME is consistently rated among the best in the industry.
            </p>
            <div class="pt-3">
                <ul class="space-y-4 p-2 text-lg list-none">
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
        </div>
    </section>
</div>

<section class="bg-gray-200 mt-8 p-4 md:p-8 lg:p-20">
    <h3 class="text-center text-gray-600 text-xl mb-2 font-bold ">Service</h3>
    <h1 class="text-center text-4xl text-blue-700 font-bold mb-5">HOME CARE AGENCY</h1>

    <div class="owl-carousel owl-theme">
        <!-- Card 1 -->
        <div class="item px-4 py-6">
            <div class="relative bg-gray-900 text-white rounded-lg overflow-hidden group">
                <img src="{{ asset('images/image-1.jpg') }}" alt="Specialist Nursing Care" class="w-full h-64 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="p-6 flex flex-col justify-between">
                    <h4 class="text-xl font-semibold mb-4">Specialist Nursing Care</h4>
                    <p class="mb-4">Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit officia consequt.</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="item px-4 py-6">
            <div class="relative bg-gray-900 text-white rounded-lg overflow-hidden group">
                <img src="{{ asset('images/image-2.jpg') }}" alt="Provide Home Visit Care" class="w-full h-64 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="p-6 flex flex-col justify-between">
                    <h4 class="text-xl font-semibold mb-4">Provide Home Visit Care</h4>
                    <p class="mb-4">Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit officia consequt.</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="item px-4 py-6">
            <div class="relative bg-gray-900 text-white rounded-lg overflow-hidden group">
                <img src="{{ asset('images/image-3.jpg') }}" alt="Relatives Accommodation" class="w-full h-64 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="p-6 flex flex-col justify-between">
                    <h4 class="text-xl font-semibold mb-4">Relatives Accommodation</h4>
                    <p class="mb-4">Amet minim mollit no duis deserut lamo sit enim aliqua dolor do amet sint Velit officia consequt.</p>
                </div>
            </div>
        </div>

        <!-- Repeat cards as needed -->
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('path/to/owl.carousel.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>
@endsection
