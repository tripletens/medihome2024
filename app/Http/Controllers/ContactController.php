<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public $data = [];
    public function submit_contact_form(Request $request){

        $validator = Validator::make( $request->all(), [
            'firstname' => 'required',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ] );

        if ( $validator->fails() ) {
            return back()->withErrors($validator)
                        ->withInput();
        } else {
            $first_name = $request->input('firstname');
            $last_name = $request->input('lastname');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $address = $request->input('address');

            $create_contact = Contact::create([
                'first_name' => $first_name, 
                'last_name' => $last_name, 
                'email' => $email, 
                'phone' => $phone, 
                'address' => $address,
            ]);


            if(!$create_contact){
                $this->data['errors'] = "Sorry we could not submit the contact form";
                return back()->with($this->data);
            }

            // send our admin  a mail with the person's details
            $this->data["success"] = "Thanks for reaching out to us. Your will be contacted ASAP.";
            toastr()->success($this->data["success"]);
            return back()->with($this->data);   
        }
    }
}
