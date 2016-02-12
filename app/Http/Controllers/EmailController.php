<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Email;
use Session;
class EmailController extends Controller
{
    //
        //
    public function getEmails()
    {
    	$emails = Email::get();
    	return view('emails',compact('emails'));
    }

    public function createEmail(Request $request)
    {
    	$email = new Email();
    	$email->email = $request->email;
    	$email->save();
    	$thankyou="Yes";
    	return view('landing',compact('thankyou'));

    }
}
