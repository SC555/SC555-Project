<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{  
    public function index()
    {
     return view('frontEnd.index') ;
    }
    public function contact(){
        return view ('frontEnd.contact');
    }
}
