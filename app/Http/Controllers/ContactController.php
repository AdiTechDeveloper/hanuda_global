<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();

        try {
            Mail::send([], [], function ($mail) use ($validated) {
                $mail->to('info@hanudaglobal.com')
                    ->subject('New Contact Inquiry - Hanuda Global')
                    ->html('
                    <h2>New Website Inquiry</h2>
                    <p><strong>Name:</strong> '.$validated['first_name'].' '.$validated['last_name'].'</p>
                    <p><strong>Email:</strong> '.$validated['email'].'</p>
                    <p><strong>Phone:</strong> '.$validated['phone'].'</p>
                    <p><strong>Message:</strong></p>
                    <p>'.nl2br(e($validated['message'])).'</p>
                ');
            });

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you! Your message has been sent.',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'error' => 'Failed to process your request. Please try again later.',
            ], 500);
        }
    }
}
