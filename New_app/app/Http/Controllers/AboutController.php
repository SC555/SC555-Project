<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
     return view('frontEnd.index') ;
    }
    public function about(){
      return view ('frontEnd.about');
    }
}
