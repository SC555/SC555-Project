<?php

namespace App\Http\Controllers;

use App\Profile_model;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function index(){
        return view('users.login_register');
    }
    public function register(Request $request){
        $this->validate($request,[
           'name'=>'required|string|max:255',
            'email'=>'required|string|email|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $input_data=$request->all();
        $input_data['password']=Hash::make($input_data['password']);
        User::create($input_data);
        return back()->with('message','Registered already!');
    }
    public function login(Request $request){
        $input_data=$request->all();
        if(Auth::attempt(['email'=>$input_data['email'],'password'=>$input_data['password']])){
            Session::put('frontSession',$input_data['email']);
            return redirect('/viewcart');
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
        $countries=DB::table('countries')->get();
        $user_login=User::where('id',Auth::id())->first();
        return view('users.account',compact('countries','user_login'));
    }

    
    public function updateprofile(Request $request,$id){
        $this->validate($request,[
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'mobile'=>'required',
        ]);
        $input_data=$request->all();
        DB::table('users')->where('id',$id)->update(['name'=>$input_data['name'],
            'address'=>$input_data['address'],
            'city'=>$input_data['city'],
            'state'=>$input_data['state'],
            'country'=>$input_data['country'],
            'pincode'=>$input_data['pincode'],
            'mobile'=>$input_data['mobile']]);
        return back()->with('message','Update Profile already!');

    }
    public function updatepassword(Request $request,$id){
        $oldPassword=User::where('id',$id)->first();
        $input_data=$request->all();
        if(Hash::check($input_data['password'],$oldPassword->password)){
            $this->validate($request,[
               'newPassword'=>'required|min:6|max:12|confirmed'
            ]);
            $new_pass=Hash::make($input_data['newPassword']);
            User::where('id',$id)->update(['password'=>$new_pass]);
            return back()->with('message','Update Password Already!');
        }else{
            return back()->with('oldpassword','Old Password is Inconrrect!');
        }
    }

    public function userView(){

        $menu_active=6;
        $i=0;
        $users=User::orderBy('created_at','desc')->get();
        return view('backEnd.userview.index',compact('menu_active','users','i'));

    }
    
    public function edit($id){

        $menu_active=6;
        $edit_user=User::findOrFail($id);
    
        return view('backEnd.userview.edit',compact('edit_user','menu_active'));

    }

    
    public function updateAdmin(Request $request, $id)
    {
        $update_user=User::findOrFail($id);
        $this->validate($request,[
           
        ]);
        $input_data=$request->all();
        if(empty($input_data['status'])){
            $input_data['status']=0;
        }
        $update_user->update($input_data);
        return redirect()->route('admin.user.index')->with('message','Edit User successfully!');
    }

    public function destroy($id)
    {
        $delete=User::findOrFail($id);
        $delete->delete();
        return redirect()->route('admin.user.index')->with('message','User has been Deleted Successfully!');
    }


    public function vendorAll(){
        $menu_active=6;
        $i=0;
        
        $users = DB::table('users')
                    ->where('admin', 2)
                    ->orderBy('created_at','desc')->get();

        return view('backEnd.userview.vendor_list',compact('menu_active','users','i'));
    }

   

}
