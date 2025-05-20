<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'ville' => $request->input('ville'),
            'message' => $request->input('message'),
            'besoin' => $request->input('besoin'),
            'logement' => $request->input('logement'),
            'type' => $request->input('type'),
            'profile' => $request->input('profile'),
            'nuit' => $request->input('nuit'),
            'budget' => $request->input('budget')

        ];

        // Send email
       $sent = Mail::to('taqi@ubikom-digital.com')->send(new ContactMail($data));

       if($sent){
        return 'success';
       }else{
        return 'error';
       }

    //   return redirect()->route('home');
    
    }
}
