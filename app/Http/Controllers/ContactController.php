<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please fill all fields correctly.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            // Send email to the portfolio owner
            Mail::to(config('mail.from.address'))->send(new ContactMail($data));

            return response()->json([
                'status' => 'success',
                'message' => 'Thank you for reaching out! I will get back to you soon.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Oops! Something went wrong while sending the message. Please try again later.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
