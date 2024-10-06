<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home', [
            "title" => "Home"
        ]);
    }

    public function indexLogin(){
        return view('login', [
            "title" => "Login"
        ]);
    }

    public function indexRegistration(){
        return view('registration', [
            "title" => "Registration"
        ]);
    }

    public function indexBeranda(){
        return view('beranda', [
            "title" => "Beranda"
        ]);
    }
}
