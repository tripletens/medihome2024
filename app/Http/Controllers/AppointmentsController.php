<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Appointment;
use Carbon\Carbon;

class AppointmentsController extends Controller
{
    //

    public $data = [];

    public function __construct(){
        $this->middleware('auth')->except(['book_appointment']);
    }

    public function book_appointment(Request $request){

        $validator = Validator::make( $request->all(), [
            'firstname' => 'required',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required|date',
            'time' => 'required'
        ] );

        if ( $validator->fails() ) {
            return back()->withErrors($validator)
                        ->withInput();
        } else {
            $first_name = $request->input('firstname');
            $last_name = $request->input('lastname');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $time = $request->input('time');
            $date = $request->input('date');

            $format_date = Carbon::parse($date);

            $create_appointment = Appointment::create([
                'first_name' => $first_name, 
                'last_name' => $last_name, 
                'email' => $email, 
                'phone' => $phone, 
                'time' => $time,
                'date' => $format_date
            ]);


            if(!$create_appointment){
                $this->data['errors'] = "Sorry we could not submit the appointment form";
                return back()->with($this->data);
            }

            // send them  a mail saying thanks for reaching out to us 
            // our representative will appointment you immediately 
            // we can also send an sms immediately 
            $this->data["success"] = "Thanks for booking an Appointment. Your will be contacted ASAP.";
            toastr()->success($this->data["success"]);
            return back()->with($this->data);   
        }
    }
}

