<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Appointment;
use Carbon\Carbon;

class AppointmentsController extends Controller
{
    public $result = [];

    public function __construct(){

        $this->result = ( object ) array(
            'status' => false,
            'status_code' => null,
            'message' => null,
            'data' => ( object ) null,
            'token' => null,
            'debug' => null
        );
    }

    // submit appointment
    
    public function submit_appointment_form(Request $request){
        $validator = Validator::make( $request->all(), [
            'first_name' => 'required',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required|date',
            'time' => 'required'
        ] );

        if ( $validator->fails() ) {
            $this->result->status_code = 422;
            $this->result->message = $validator->errors();
            $this->result->status = "error";
            return response()->json( $this->result );
        } else {
            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
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
                $this->result->status_code = 422;
                $this->result->message = "Sorry we could not submit the appointment form";
                $this->result->status = "error";
                return response()->json( $this->result );
            }

            // send them  a mail saying thanks for reaching out to us 
            // our representative will appointment you immediately 
            // we can also send an sms immediately 

            $this->result->status = "success";
            $this->result->status_code = 200;
            $this->result->message = "Appointment Form submitted successfully";
            $this->result->data = $create_appointment;
            return response()->json( $this->result );
        }
    }
}
