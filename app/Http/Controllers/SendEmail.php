<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\emailClient;
use Illuminate\Http\Request;
use App\Http\Requests;

class sendEmail extends Controller
{
    public function send(Request $request)
    {
      $data = [
        'nama' => $request->nama_anda,
        'email' => $request->email_anda,
        'catatan' => $request->catatan
      ];
      Mail::to('agustia.tarikh150@gmail.com')->send(new emailClient($data));
      return redirect()->route('AfterInputContactForm');
    }
}
