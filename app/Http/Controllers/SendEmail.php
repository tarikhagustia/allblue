<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\emailClient;

class sendEmail extends Controller
{
    public function send()
    {
      Mail::to('agustia.tarikh150@gmail.com')->send(new emailClient('Tarikh'));
    }
}
