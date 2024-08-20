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

<div class="bg-green-300 h-36">
    <p class="text-red-800">Text here </p>
</div>
<!-- </div> -->
@endsection
