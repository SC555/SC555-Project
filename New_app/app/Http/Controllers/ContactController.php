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
//    for contact message
    public function display(Request $request){
        $this->validate($request,[
           'name'=>'required|string|max:255',
            'email'=>'required|string|email|unique:users,email',
            'subject'=>'required|string|max:25',
             'message'=>'required|string|max:400',
        ]);
         
        $input_data=$request->all();
        Message::create($input_data);
        return back()->with('message','Message was sent!');
    }
    
}
