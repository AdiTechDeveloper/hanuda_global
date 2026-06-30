<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function submit(Request $request)
    {

        $request->validate([

            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required'

        ]);


        Mail::send([], [], function($mail) use ($request){

            $mail->to('info@hanudaglobal.com')
            ->subject('New Contact Inquiry - Hanuda Supply')
            ->html('

                <h2>New Website Inquiry</h2>

                <p><strong>Name:</strong> '.$request->first_name.' '.$request->last_name.'</p>

                <p><strong>Email:</strong> '.$request->email.'</p>

                <p><strong>Phone:</strong> '.$request->phone.'</p>

                <p><strong>Message:</strong></p>

                <p>'.$request->message.'</p>

            ');

        });


        return back()->with('success','Your message has been sent successfully.');

    }

}