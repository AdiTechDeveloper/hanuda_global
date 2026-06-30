<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        try {

            Mail::send([], [], function ($mail) use ($validated) {

                $mail->to('info@hanudaglobal.com')
                    ->subject('New Contact Inquiry - Hanuda Supply')
                    ->html('
                    <h2>New Website Inquiry</h2>

                    <p><strong>Name:</strong> '.$validated['first_name'].' '.$validated['last_name'].'</p>

                    <p><strong>Email:</strong> '.$validated['email'].'</p>

                    <p><strong>Phone:</strong> '.$validated['phone'].'</p>

                    <p><strong>Message:</strong></p>

                    <p>'.nl2br(e($validated['message'])).'</p>
                ');
            });

            return back()->with('success', 'Your message has been sent successfully.');

        } catch (\Exception $e) {
            Log::error('Contact form error: '.$e->getMessage());

            return back()->with('error', 'Something went wrong. Details: '.$e->getMessage());
        }
    }
}
