<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend/home/home');
    }

    public function about(){
        return view('frontend/home/about');
    }
    

    public function contact(){
        return view('frontend/home/contact');
    }
    public function smartwatch(){
        return view('frontend/jenis/smartwatch');
    }

    public function automatic(){
        return view('frontend/jenis/automatic');
    }

    public function chronograph(){
        return view('frontend/jenis/chronograph');
    }

    public function digital(){
        return view('frontend/jenis/digital');
    }

    public function quartz(){
        return view('frontend/jenis/quartz');
    }
}
