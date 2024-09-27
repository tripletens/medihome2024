@extends('layouts.landing')

@section('content')
<div class="p-auto">
    <div class="relative bg-gray-900 text-white shadow-lg overflow-hidden cursor-pointer h-80" style="background-image: url('{{ asset('images/image-3.jpg') }}'); background-size: cover; background-position: center; opacity-40;">
        <div class="absolute inset-0 bg-black opacity-25"></div>  
        <div class="absolute inset-0 bg-opacity-40 flex items-center justify-center">
            <h2 class="text-4xl sm:text-7xl font-bold text-center text-white drop-shadow-md">Testimonials</h2>
        </div>
    </div>
</div>
<section class="py-16 bg-gray-100">
    <div class="container mx-auto pt-5">
        <div class="flex flex-col lg:flex-row">
            <div class="lg:w-1/3 mb-8 lg:mb-0">
                <div class="mb-5">
                    <span class="text-blue-500 text-xl font-semibold">Testimonials</span>
                    <h2 class="text-3xl font-bold mt-2 mb-2 pt-4">
                        What They Say About Us?
                    </h2>
                    <h4 class="font-semibold">Listen to what our client have to say about us.</h4>
                </div>
            </div>
            
            <div class="lg:w-2/3">
    <div class="relative">
        <div>
            <div class="bg-white p-6 rounded-lg mb-5">
                <div class="flex items-center">
                    <div class="relative">
                        <h4 class="font-semibold">George Omotese</h4>
                        <p class="text-gray-500">Client</p>
                    </div>
                </div>
                <p class="text-gray-700 italic mb-3">“MHCS Medicare was the second team for my late father. They cooperated with me. They understood his issues, they totally supported him and me right up to the end. I will forever feel grateful. You helped me keep him where he wanted to be, and you know how to play along with him always. Kudos!!
                        The contract then started around February 2018, until he sadly passed away in May 2021 at age of 87yrs. I can honestly say they became like family to us and still are. Their standard of care is amazing but more than that they really do put patient first.
                        I salute the MD & His team for professionalism indeed!!”</p>
                <div class="flex">
                    @for($i = 0; $i < 5; $i++)
                        <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
                    @endfor
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg">
                <div class="flex items-center mb-4">
                    <div class="relative">
                        <h4 class="font-semibold">Awolu Yaya</h4>
                        <p class="text-gray-500">Client</p>
                    </div>
                </div>
                <p class="text-gray-700 italic mb-3">“MHCS Medicare was the second team for my late father. They cooperated with me. They understood his issues, they totally supported him and me right up to the end. I will forever feel grateful. You helped me keep him where he wanted to be, and you know how to play along with him always. Kudos!!
                        The contract then started around February 2018, until he sadly passed away in May 2021 at age of 87yrs. I can honestly say they became like family to us and still are. Their standard of care is amazing but more than that they really do put patient first.
                        I salute the MD & His team for professionalism indeed!!
.”              </p>
                <div class="flex">
                    @for($i = 0; $i < 5; $i++)
                        <i class="{{ $i < 5 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
                    @endfor
                </div>
            </div>

            <!-- Add more testimonials as needed -->
        </div>
    </div>
</div>

        </div>
    </div>
    <div class="owl-carousel owl-theme pt-5">
    <!-- Card 1 -->
    <div class="bg-white p-10 rounded-lg  flex flex-col h-80 mx-4 "> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold">Pas Solomon Adeniran</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">
        "MediHome care services visited my father daily (and more by request of a phone call as necessary). They are all very nice, skilled and cheerful people, who really care. They also take time to connect other Specialist when the need arise and have a conversation that promotes the wellbeing of their patients. I sincerely recommend them"
        </p>
        <div class="flex">
            @for($i = 0; $i < 5; $i++)
                <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
            @endfor
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white p-10 rounded-lg  flex flex-col h-70 mx-4"> 
        <div class="flex items-center">
            <div class="relative">
                <h4 class="font-semibold">Kahdijat Hussien</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“Wonderful service to Mum in her home. We found all carers and management team very supportive, listened to what we said, and particularly responsive and caring to Mum. I cannot recommend them highly enough.”</p>
        <div class="flex">
            @for($i = 0; $i < 5; $i++)
                <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
            @endfor
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white p-10 rounded-lg  flex flex-col h-80 mx-4"> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold">Ofor Blessing</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“My mother has been through some care companies - six or seven of them - and I can say without any hesitation that MediHome care Services is the best care company we could have wished for. The carers from MEDIHOME are second to none. All my siblings, we never worry about Mama's challenge since we engaged MediHome. Though she's not an easy old woman but they won her heart. Kudos to you all!!
        ”</p>
        <div class="flex">
            @for($i = 0; $i < 5; $i++)
                <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
            @endfor
        </div>
    </div>

    <!-- Card 4 -->
    <div class="bg-white p-10 rounded-lg  flex flex-col h-80 mx-4"> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold">Sobowale magret</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“I am happy to depend on their care and assistance. Interestingly, the team leader is always in contact, checking the Patient & Carers as well. They are mega home care professionals & Specialist indeed.
                        I have already recommended this company to my friends both home and abroad.
                        What a special team. Thank you all at MEDIHOME!!
                ”</p>
        <div class="flex">
            @for($i = 0; $i < 5; $i++)
                <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
            @endfor
        </div>
    </div>

    <!-- Card 5 -->
    <div class="bg-white p-10 rounded-lg  flex flex-col h-80 mx-4"> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold m-auto">Silas Kutunga</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“We are really very satisfied with their Caregivers Services all through. Both Doctor & Nurse follow-up the care plan as stipulated. We couldn't get such wonderful care while he was admitted. We would have no hesitation to recommend MediHome Care Services to everyone and sure lots of people would be very happy to have your undisputed care and assistance. The entire family salute your passion!!!
                ”</p>
        <div class="flex">
            @for($i = 0; $i < 5; $i++)
                <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
            @endfor
        </div>
    </div>

    <!-- Card 6 -->
    <div class="bg-white p-10 rounded-lg  flex flex-col h-80 mx-4"> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold m-auto">Wakel & Barakat Mayaki</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“MHCS are a very professional organisation. Their staff are very friendly, well-trained, smart and presentable. They always follow the guidelines for care during the covid19 pandemic. They have proven to be very professional, Reliable and ready listen to their client's needs and do their best. MHCS is overall best!!!!”</p>
        <div class="flex">
            @for($i = 0; $i < 5; $i++)
                <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
            @endfor
        </div>
    </div>

    <!-- Card 7 -->
    <div class="bg-white p-10 rounded-lg  flex flex-col h-80 mx-4"> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold m-auto">Morayo Afolabi</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“I felt it is pertinent to confirm that MHCS displays outstanding levels of care, sensitivity and a strong partnership approach. I unreservedly recommend them as all team members highlight the importance of recognising and respecting the requirements of the individual person they care for. The team deserves an award!!!
        ”</p>
        <div class="flex">
            @for($i = 0; $i < 5; $i++)
                <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
            @endfor
        </div>
    </div>

    <!-- Card 8 -->
    <div class="bg-white p-10 rounded-lg  flex flex-col h-80 mx-4"> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold m-auto">Chuwkuka Ebere</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“Giving a level of care and service above and beyond that which was expected. Exceptional care and attention is always perfect. Very pleased and grateful. MediHome care Services is the way!!”</p>
        <div class="flex">
            @for($i = 0; $i < 5; $i++)
                <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
            @endfor
        </div>
    </div>

    <!-- Card 9 -->
    <div class="bg-white p-10 rounded-lg  flex flex-col h-90 mx-4"> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold m-auto">Babalola Adetayo</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“My father really looks forward to the visits from MHCS caregivers. They are kind, cheerful and professional. They assisted my father to recover from his eye disorder & Parkinson's disease, moving around the house now without much assistance. They have perfect means of sourcing Drugs through their Clinical pharmacist and delivered at appropriate time except unprescribed from opthalmologist. Excellence service throughout. The best home care provider here in Nigeria. Alasss MHCS!!!
        ”</p>
        <div class="flex">
            @for($i = 0; $i < 5; $i++)
                <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
            @endfor
        </div>
    </div>

    <!-- Card 10 -->
    <div class="bg-white p-10 rounded-lg  flex flex-col h-90 mx-4"> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold m-auto">Alhaja Muibat Ogungbenro</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“My mother was admitted into hospital, terminal case. After 37 days, the management told us to look elsewhere because of NARD Strike. A relative of another patient told us about MediHome, I called them & we quickly subscribed likewise. We adhered to their B & D packages and behold, they gave us all their packages without extra charges.The Consultant visited her times without number. The carer were polite in their duty, Nurses connected well with Doctor. My mother was perfectly okay within 4 months. Honestly, MediHome is another multispecialist hospital within our home. Best healthcare Innovation Services. Hail MHCS!!!!!
        ”</p>
        <div class="flex">
            @for($i = 0; $i < 5; $i++)
                <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
            @endfor
        </div>
    </div>

    <!-- Card 11 -->
    <div class="bg-white p-10 rounded-lg  flex flex-col h-90 mx-4"> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold m-auto">Stephen Paul</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“Following an unplanned stay in hospital which resulted in two procedures taking place, it was suggested that I should consider some personal care for a few weeks until I recovered from my ordeal. As a family, we connected the Director of MediHome Care Services through a Nurse "Matron", for several years whilst they cared for my parent. They connected other professionals when need arises without further delay. No unnecessary hospital visit again.
                        Great, superb & Wonderful Services indeed. I recommend MediHome.
”</p>
</div>
 <!-- Card 12 -->
 <div class="bg-white p-10 rounded-lg  flex flex-col h-80 mx-4"> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold m-auto">Oyelade titilayo</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“Since taken over my mother's care, she was better and sounded happier.
                        The multidisciplinary Team are fantastic people. Most importantly, they listen to my mum's needs every point in time.
                        Care as it should be. I totally recommend this company.
”</p>
</div>
<!-- Card 13 -->
<div class="bg-white p-10 rounded-lg  flex flex-col h-80 mx-4"> 
        <div class="flex items-center ">
            <div class="relative">
                <h4 class="font-semibold m-auto">Afred Obaloluwa</h4>
                <p class="text-gray-500">Client</p>
            </div>
        </div>
        <p class="text-gray-700 italic mb-3 flex-grow">“Fantastic in timing no matter odds. Seeing them alone is another healing, the said re-corporate package is top notch. My inlaw fully recovered within 2 months of their services. MHCS No option!!!!
”</p>
        <div class="flex">
            @for($i = 0; $i < 5; $i++)
                <i class="{{ $i < 4 ? 'fas fa-star text-yellow-500' : 'far fa-star text-gray-400' }}"></i>
            @endfor
        </div>
    </div>
</div>


</section>
@endsection
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