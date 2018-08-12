<?php

namespace App\Http\Controllers\ContactUs;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactFormMessage;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{

    /*
     * Process the Contact Us submission
     */
    public function store(Request $request)
    {

        // Validate form request
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'message'   => 'required'
        ]);

        // Persist to DB
        $contact = Contact::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'message'   => $request->message
        ]);

        // Mail the info
        Mail::to(config('inspire.supportEmail'))
            ->send(new ContactFormMessage($contact));

        // Redirect back to homepage
        return redirect('/')->with('contact_success', true);

    }

}
