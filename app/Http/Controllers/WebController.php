<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        return view('frontend.home');
    }

    public function about() {
        return view('frontend.about');
    }

    public function seminar() {
        return view('frontend.seminar');
    }

    public function conference() {
        return view('frontend.conference');
    }

    public function pricing() {
        return view('frontend.pricing');
    }

}
