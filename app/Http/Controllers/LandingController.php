<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    // old landing page
    public function indexOld(){
        return view('index-old');
    }


    public function about(){
        return view('about');
    }
    public function testimonial(){
        return view('testimonial');
    }

    public function contact_us(){
        return view('contact');
    }

    public function missionAndVision() {
        return view('missionAndVision');
    }

    public function whatWeOffer() {
        return view('whatWeOffer');
    }
    
}
