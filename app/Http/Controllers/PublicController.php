<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationEmail;

class PublicController extends Controller
{
    public function form(){
        
    return view('form');
    }
    public function sendEmail(Request $request){
        Mail::to($request->email)->send(new ConfirmationEmail());
        return redirect()->route('home')->with('success', 'Email inviata con successo!');
    }


}
