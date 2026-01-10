<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendMail(Request $request)
    {
        $to = "support@gvac.in";
        $email = $request->email;
        $contact = $request->contact;
        $subject = $request->subject;
        $message = $request->message;
        $name = ucwords($request->name);
        $messageContent = nl2br(e($request->message));

        $msg = "
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$messageContent</p>
        ";
        // $msg = "
        // Name: $name,<br>
        // Email: $email,<br>
        // Contact no.: $contact,<br>
        // <p>Dummy Mail</p>

        // Saif<br>
        // SVC</p>
        // ";
        Mail::to($to)->send(new ContactMail($email, $msg, $subject, $contact));
        return redirect()->back()->with('Success', 'Email sent successfully!');
    }
}
