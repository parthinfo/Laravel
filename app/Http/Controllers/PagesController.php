<?php

namespace App\Http\Controllers;

use App\Http\Request;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
      return view('home');
    }
    public function about() {
      return view('about');
    }
    public function contact() {
      return view('contact');
    }
}
