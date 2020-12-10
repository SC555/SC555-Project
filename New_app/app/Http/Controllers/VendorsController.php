<?php

namespace App\Http\Controllers;

use App\Profile_model;
use App\User;
use App\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class VendorsController extends Controller
{
    public function index(){
        return view('vendors.vendor_login_register');
    }

    

    public function register(Request $request){
        $this->validate($request,[
           'name'=>'required|string|max:255',
            'email'=>'required|string|email|unique:users,email',
            'password'=>'required|min:6|confirmed',
            'mobile' => 'required|max:10'
        ]);
        $input_data=$request->all();
        $input_data['password']=Hash::make($input_data['password']);
        $input_data['admin']=2;
        User::create($input_data);
        return back()->with('message','Registered as a vendor has been sucessfully!');
    }

    public function login(Request $request){
        $input_data=$request->all();
        
        if(Auth::attempt(['email'=>$input_data['email'],'password'=>$input_data['password']])){
            Session::put('vendorSession',$input_data['email']);
            Session::put('vendorUser','2');
            return redirect('/vendor_home');
          //  return redirect('/vendor_dashboard');
        }else{
            return back()->with('message','Account is not Valid!');
        }
    }
    public function logout(){
        Auth::logout();
        Session::forget('frontSession');
        return redirect('/');
    }
    public function account(){
        $menu_active=6;
        $i=0;
        $countries=DB::table('countries')->get();
        $user_login=User::where('id',Auth::id())->first();
        return view('backEnd.userview.account',compact('menu_active','countries','user_login','i'));
    }
    
    public function home(){

        $menu_active=6;
        $i=0;
        $users=User::orderBy('created_at','desc')->get();
        return view('vendors.index',compact('menu_active','users','i'));

    }
    
    public function buyersAll(){
        $menu_active=6;
        $i=0;
        
        $users = DB::table('users')
                    ->where('admin', null)
                    ->orderBy('created_at','desc')->get();

        return view('backEnd.userview.buyers_list',compact('menu_active','users','i'));
    }

   
}
