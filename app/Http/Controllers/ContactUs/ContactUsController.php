<?php

namespace App\Http\Controllers\ContactUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{

    /*
     * Process the Contact Us submission
     */
    public function postContact(Request $request)
    {

        // Validate form request
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'message'   => 'required'
        ]);

        // Persist to DB

        // Mail the info

        // Flash a message

        // Redirect back to homepage
        return redirect('/');



    }

}
