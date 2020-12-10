@extends('backEnd.layouts.master')
@section('title','Edit User Details')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> User Edit</a> <a href="{{route('userview.index')}}">User</a> <a href="#" class="current">Edit User</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif

       
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Edit User</h5>
            </div>
            <div class="widget-content nopadding">
                
               <form action="{{route('admin.userview.updateadmin',$edit_user->id)}}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field("PUT")}}
                    <div class="control-group">
                        <label for="name" class="control-label">Name</label>
                        <div class="controls{{$errors->has('coupon_code')?' has-error':''}}"> 
                            <input type="text" name="" id="" class="form-control" value="{{$edit_user->name}}"
                                   title="" required="required" minlength="5" maxlength="15" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="amount" class="control-label">Email</label>
                        <div class="controls{{$errors->has('email')?' has-error':''}}">
                            <input type="text" min="0" name="" id="" class="form-control" value="{{$edit_user->email}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        </div>
                    
                        <div class="control-group">
                        <label for="amount" class="control-label">Address</label>
                        <div class="controls{{$errors->has('address')?' has-error':''}}">
                            <input type="text" min="0" name="" id="" class="form-control" value="{{$edit_user->address}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('address')}}</span>
                        </div>
                    
                        <div class="control-group">
                        <label for="amount" class="control-label">City</label>
                        <div class="controls{{$errors->has('city')?' has-error':''}}">
                            <input type="text" min="0" name="" id="" class="form-control" value="{{$edit_user->city}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('city')}}</span>
                        </div>
                       
                        <div class="control-group">
                        <label for="amount" class="control-label">State</label>
                        <div class="controls{{$errors->has('state')?' has-error':''}}">
                            <input type="text" min="0" name="" id="" class="form-control" value="{{$edit_user->state}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('state')}}</span>
                        </div>


                        <div class="control-group">
                        <label for="amount" class="control-label">Country</label>
                        <div class="controls{{$errors->has('city')?' has-error':''}}">
                            <input type="text" min="0" name="" id="" class="form-control" value="{{$edit_user->country}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('country')}}</span>
                        </div>

                        <div class="control-group">
                        <label for="amount" class="control-label">Pincode</label>
                        <div class="controls{{$errors->has('pincode')?' has-error':''}}">
                            <input type="text" min="0" name="" id="" class="form-control" value="{{$edit_user->pincode}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('pincode')}}</span>
                        </div>

                        <div class="control-group">
                        <label for="amount" class="control-label">Mobile</label>
                        <div class="controls{{$errors->has('mobile')?' has-error':''}}">
                            <input type="text" min="0" name="" id="" class="form-control" value="{{$edit_user->	mobile}}" title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('mobile')}}</span>
                        </div>

                    
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Update User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endsection