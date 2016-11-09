<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class contactController extends Controller
{
    public function index()
    {

    }
    public function thankyou()
    {
      return view('contact.thankyou');
    }
}
