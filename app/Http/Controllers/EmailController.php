<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * Send Email
     */
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ], [
            'first-name.required' => 'The first name field is required.',
            'last-name.required' => 'The last name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'subject.required' => 'The subject field is required.',
            'message.required' => 'The message field is required.',
        ]);

        // $data = [
        //     'first_name' => $request->input('first-name'),
        //     'last_name' => $request->input('last-name'),
        //     'email' => $request->input('email'),
        //     'subject' => $request->input('subject'),
        //     'message' => $request->input('message')
        // ];

        // $to = 'james.patrick.boyle92@gmail.com';
        // $subject = $data['subject'];
        // $message = $data['message'];
        // $headers = 'From: info@gebrauchte-reifen.net' . "\r\n" .
        //     'Reply-To: ' . $data['email'] . "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();

        // mail($to, $subject, $message, $headers);

        return redirect( route('home') )->with('message', 'Thank you for your email, we will get back to you shortly');
    }
}
