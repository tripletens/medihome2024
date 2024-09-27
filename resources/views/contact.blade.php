@extends('layouts.landing')

@section('content')
<div class="p-auto">
    <div class="relative bg-gray-900 text-white shadow-lg overflow-hidden cursor-pointer h-80" style="background-image: url('{{ asset('images/image-3.jpg') }}'); background-size: cover; background-position: center; opacity-40;">
        <div class="absolute inset-0 bg-black opacity-25"></div>  
        <div class="absolute inset-0 bg-opacity-40 flex items-center justify-center">
            <h2 class="text-4xl sm:text-7xl font-bold text-center text-white drop-shadow-md">Contact Us</h2>
        </div>
    </div>
</div>

<section class="py-16 bg-gray-200">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <span class="text-lg text-gray-600 uppercase font-semibold">Let’s Connect</span>
            <h2 class="text-4xl font-bold mt-2">Don't Hesitate to Contact Us</h2>
        </div>
        <div class="bg-white p-8 rounded-lg">
            <form method="post" action="{{ route('contact.send') }}" id="contact-form">
                @csrf
                <div class="grid gap-4">
                    <div class="col-span-1 md:col-span-1">
                        <input placeholder="Your Name" required type="text" name="form_name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="col-span-1 md:col-span-1">
                        <input placeholder="Your Email" required type="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="col-span-1 md:col-span-1">
                        <input placeholder="Phone Number" required type="text" name="phone" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="col-span-1">
                        <textarea name="form_message" placeholder="Message" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4"></textarea>
                    </div>
                    <div class="col-span-1 text-center flex justify-end ">
                        <input id="form_botcheck" type="hidden" name="form_botcheck">
                        <button type="submit" class="bg-blue-500 text-white py-3 px-6 rounded-lg hover:bg-blue-600 transition duration-300">
                            Send Message <i class="flaticon-right-arrow-1"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection