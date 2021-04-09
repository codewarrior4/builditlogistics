<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;

class Email extends Controller
{
    //
    public function index()
    {
        $customer = ["email"=>"mayowatope119@gmail.com","Name"=>"Adebayo"];
        // die($customer['email']);
        session()->flash('Name',$customer['Name']);
        Mail::to($customer['email'])->send(new Welcome());
    }
}
