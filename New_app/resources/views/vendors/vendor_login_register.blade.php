@extends('frontEnd.layouts.master')
@section('title','Login Register Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
		<div class= "sell">
 
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif

        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-seller"><!--login form-->
                    <h2>Login as a <b>Vendor</b></h2>
                    <form action="{{url('/login_vendor')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="email" placeholder="Email" name="email"/>
                        <input type="password" placeholder="Password" name="password"/>
                        <span>
                            <input type="checkbox" class="checkbox">
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
          <div class="col-sm-1">
                <h2 class="orr">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-seller"><!--sign up form-->
                    <h2>New <b>Vendor</b> Signup!</h2>
                    <form action="{{url('/register_vendor')}}" method="post" class="form-horizontal">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" placeholder="Name" name="name" value="{{old('name')}}"/>
                        <span class="text-danger">{{$errors->first('name')}}</span>

                        <input type="email" placeholder="Email Address" name="email" value="{{old('email')}}"/>
                        <span class="text-danger">{{$errors->first('email')}}</span>

                        <input type="text" placeholder="Address" name="address" value="{{old('address')}}"/>
                        <span class="text-danger">{{$errors->first('address')}}</span> 

                        <input type="text" placeholder="City" name="city" value="{{old('city')}}"/>
                        <span class="text-danger">{{$errors->first('city')}}</span>

                        <input type="text" placeholder="Province" name="state" value="{{old('state')}}"/>
                        <span class="text-danger">{{$errors->first('state')}}</span>
                        
                        
                        <input type="text" placeholder="mobile" name="	mobile" value="{{old('mobile')}}"/>
                        <span class="text-danger">{{$errors->first('mobile')}}</span>

                        <input type="password" placeholder="Password" name="password" value="{{old('password')}}"/>
                        <span class="text-danger">{{$errors->first('password')}}</span>

                        <input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                        <span class="text-danger">{{$errors->first('password_confirmation')}}</span>

                        <button type="submit"  class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</div>


    <div style="margin-bottom: 20px;"></div>













 
@endsection