<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail; // Create this mail class

class EmailController extends Controller
{
    public function sendEmail(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' =>'required',
        'message' => 'required',
    ]);

    Mail::to('recipient@example.com')->send(new ContactFormMail($data));

    return redirect()->back()->with('success', 'Email sent successfully.');
}
}
