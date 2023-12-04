<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function loginGeneral()
    {
        return view ('home.login');
    }
    public function menuPrincipal()
    {
        return view('home.menu');
    }
}
