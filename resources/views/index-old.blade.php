@extends('layouts.landing')

@section('content')
<!-- <div class="container-fluid m-0 p-0 my-0"> -->
<div class="banner">
    <h2 class="welcome-text">Welcome to Medihome</h2>
    <h4 class="center-text">Home care services to elderly, chronically ill and disabled patients.</h4>
    <div class="row ">
        <div class="col-md-6 my-2 d-flex justify-content-center mx-auto">
            <button class="banner-button mt-3 px-2">
                <img src="{{asset('images/android.png')}}" alt="android logo" />
                <p class="mt-2 ml-0">Available on Playstore</p>
            </button>
        </div>
        <div class="col-md-6 my-2 d-flex justify-content-center mx-auto">
            <button class="banner-button  mt-3 px-2">
                <img src="{{asset('images/ios.png')}}" alt="ios logo" />
                <p class="mt-2 ml-0">Available on IOS Store </p>
            </button>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="column my-5">
        <h5 class="choose-top-text">Why you should choose us </h5>
        <h2 class="choose-our-services">Our Services</h2>
        <div class="row d-flex justify-content-center mx-auto my-5">
            <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3 my-3 d-flex justify-content-center ">
                <div class="choose-item ">
                    <div class="choose-circle">
                        <img src="{{asset('images/consultation.png')}}" alt="consultation icon" />
                    </div>
                    <h5 class="choose-item-text">Healthcare</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3 d-flex my-3 d-flex justify-content-center ">
                <div class="choose-item">
                    <div class="choose-circle">
                        <img src="{{asset('images/diagnosis.png')}}" alt="diagnosis icon" />
                    </div>
                    <h5 class="choose-item-text">Caregiving</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3 my-3 d-flex justify-content-center ">
                <div class="choose-item">
                    <div class="choose-circle">
                        <img src="{{asset('images/consultation.png')}}" alt="Test icon" />
                    </div>
                    <h5 class="choose-item-text">Medical escorts</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="column">
        <h5 class="choose-top-text">Get Access to Medical Professionals and Services </h5>
        <h2 class="choose-our-services">Book an Appointment</h2>
        <div class="row d-flex justify-content-center my-5">
            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                <div class="appointment-left">
                    <h3 class="appointment-left-text">
                        We give you access to professionals in the medical field. Services such as Healthcare, Caregiving, Medical Excorts and much more can now be brought to your DoorStep
                    </h3>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                <form class="py-5 " method="POST" action="{{route('book_appointment_page')}}">
                    @csrf
                    @if ($errors->any())
                    <div class="">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <span class="alert alert-danger">{{ $error }}</span>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(session('success'))
                    <span class="alert alert-success mb-5">{{ session('success') }}</span>
                    <br /><br />
                    @endif
                    <div class="row">
                        <div class="row mx-auto">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="firstname" class="label  my-1">First Name: </label>
                                <input class="form-control" required type="text" name="firstname" placeholder="Enter your Firstname" />
                                @error('firstname')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="lastname" class="label  my-1">Last Name: </label>
                                <input class="form-control" required type="text" name="lastname" placeholder="Enter your Lastname" />
                                @error('lastname')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row py-3 mx-auto">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="phone" class="label my-1">Phone Number: </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+234</span>
                                    </div>
                                    <input class="form-control" required type="text" name="phone" placeholder="Enter your Phone Number" />
                                </div>
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="email" class="label  my-1">Email Address: </label>
                                <input class="form-control" type="email" required name="email" placeholder="Enter your E-mail Address" />
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mx-auto" style="margin-top: -10px;">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="time" class="label  my-1">Select Time: </label>
                                <input class="form-control" type="time" required name="time" placeholder="Select a Suitable Time" />
                                @error('time')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="date" class="label  my-1">Select Date: </label>
                                <input class="form-control" required type="date" name="date" placeholder="Select a Suitable Date" />
                                @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mx-auto" style="margin-top: -10px;">
                            <div class="form-group col-md-6 col-sm-12">
                                <button class="button" type="submit">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid ">
    <div class="row my-3">
        <div class="col-md-6 col-sm-12 col-lg-6 mb-5">
            <img src="{{asset('images/doctor_picture.png')}}" class="img img-fluid img-responsive" alt="doctor picture" />
        </div>
        <div class="col-md-6 col-sm-12 col-lg-6 py-2">
            <p class="doctor-top-text my-2">Passionate about saving lives as we are?</p>
            <h2 class="doctor-header my-3 text-left">Register as a Doctor / Caregiver</h2>
            <p class="doctor-bottom-text my-3">Doctors/Caregivers can register and join as a part-time worker who will check his/her clients once a week and get paid.</p>
            <div class="form-group col-md-6 col-sm-12">
                <a href="{{route('contact-us-page')}}" style="text-decoration:none; cursor:pointer;">
                    <button class="button" type="submit">Contact Us</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid about-div py-5">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <h2 class="about-header">About Us</h2>
            <p class="about-bottom-text">
                MEDIHOME is a licensed and certified home care Agency through Ministry Of Health and also Incorporated at corporate Affairs Commission here in Nigeria.
                Our organization is involved in providing home health, companionship & social care services to individuals in their places of residence either temporary or permanent settlements.
            </p>

            <a href="{{route('about-page')}}" style="text-decoration:none; cursor:pointer;">
            <button class="about-btn">Read more </button>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid partner-div py-5">
    <h5 class="choose-top-text mt-0">Partner with us  </h5>
    <h2 class="choose-our-services">Our Partners</h2>
    <div class="row mt-3 ">
        <div class="col-md-2 col-sm-12 col-lg-2 my-3 d-flex flex-row justify-content-center">
            <img src="{{asset('images/mes.png')}}" class=" " alt="" />
        </div>
        <div class="col-md-2 col-sm-12 col-lg-2 my-3 d-flex flex-row justify-content-center">
            <img src="{{asset('images/nan.png')}}" class="img img-fluid img-responsive" alt="" />
        </div>
        <div class="col-md-2 col-sm-12 col-lg-2  my-3 d-flex flex-row  justify-content-center">
            <img src="{{asset('images/nma.png')}}" class="img img-fluid img-responsive" alt="" />
        </div>
        <div class="col-md-2 col-sm-12 col-lg-2 my-3 d-flex flex-row  justify-content-center">
            <img src="{{asset('images/nml.png')}}" class="img img-fluid img-responsive" alt="" />
        </div>
        <div class="col-md-2 col-sm-12 col-lg-2  d-flex flex-row my-3 justify-content-center">
            <img src="{{asset('images/npc.png')}}" class="img img-fluid img-responsive" alt="" />
        </div>
        <div class="col-md-2 col-sm-12 col-lg-2 my-3 d-flex flex-row  justify-content-center">
            <img src="{{asset('images/nsp.png')}}" class="img img-fluid img-responsive" alt="" />
        </div>
    </div>
</div>

<div class="container-fluid testimonials-div">
    <div class="row mx-auto d-flex align-items-center">
        <div class="col-md-12">
            <h5 class="text-center testimonial_top_text"> What our customers are saying </h5>
            <h2 class="text-center">Testimonials</h2>
            <div class="d-flex flex-row row mt-3 justify-content-center align-items-center ">
                <div class="col-md-3 m-3 pt-3 testimonial-content">
                    <h3 class="text-center"> George Omotese </h3>
                    <p>
                        MHCS Medicare was the second team for my late father. They cooperated with me. They understood his issues, they totally supported him and me right up to the end. I will forever feel grateful. You helped me keep him where he wanted to be, and you know how to play along with him always. Kudos!!
                        The contract then started around February 2018, until he sadly passed away in May 2021 at age of 87yrs. I can honestly say they became like family to us and still are. Their standard of care is amazing but more than that they really do put patient first.
                        I salute the MD & His team for professionalism indeed!!
                    </p>
                </div>
                <div class="col-md-3 m-3 pt-3 testimonial-content">
                    <h3 class="text-center">Awolu Yaya </h3>
                    <p>
                        Wonderful service to Mum in her home. We found all carers and management team very supportive, listened to what we said, and particularly responsive and caring to Mum. I cannot recommend them highly enough.
                    </p>
                </div>
                <div class="col-md-3 m-3 pt-3 testimonial-content">
                    <h3 class="text-center">Pas Solomon Adeniran</h3>
                    <p>
                        MediHome care services visited my father daily (and more by request of a phone call as necessary). They are all very nice, skilled and cheerful people, who really care. They also take time to connect other Specialist when the need arise and have a conversation that promotes the wellbeing of their patients. I sincerely recommend them.
                    </p>
                </div>
            </div>
            <div class="d-flex flex-row row mt-3 justify-content-center align-items-center ">
                <div class="col-md-3 m-3 pt-3 testimonial-content">
                    <h3 class="text-center"> Kahdijat Hussien </h3>
                    <p>
                        Wonderful service to Mum in her home. We found all carers and management team very supportive, listened to what we said, and particularly responsive and caring to Mum. I cannot recommend them highly enough; something we couldn't always do with previous caring team. Effortless triumph!!
                    </p>
                </div>
                <div class="col-md-3 m-3 pt-3 testimonial-content">
                    <h3 class="text-center"> Ofor Blessing </h3>
                    <p>
                        My mother has been through some care companies - six or seven of them - and I can say without any hesitation that MediHome care Services is the best care company we could have wished for. The carers from MEDIHOME are second to none. All my siblings, we never worry about Mama's challenge since we engaged MediHome. Though she's not an easy old woman but they won her heart. Kudos to you all!!
                    </p>
                </div>
                <div class="col-md-3 m-3 pt-3 testimonial-content">
                    <h3 class="text-center">Sobowale magret</h3>
                    <p>
                        I am happy to depend on their care and assistance. Interestingly, the team leader is always in contact, checking the Patient & Carers as well. They are mega home care professionals & Specialist indeed.
                        I have already recommended this company to my friends both home and abroad.
                        What a special team. Thank you all at MEDIHOME!!
                    </p>
                </div>
                <a href="{{route('testimonial-page')}}" class="mb-5 mx-auto" style="text-decoration:none;cursor:pointer;">
                    <button class="button mx-auto"> Read More</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
@endsection
