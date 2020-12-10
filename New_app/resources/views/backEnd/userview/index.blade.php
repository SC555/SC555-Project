@extends('backEnd.layouts.master')
@section('title','Users')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="" class="current">User List</a></div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong></strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>List Orders</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>country</th>
                        <th>Pincode</th>
                        <th>Mobile</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                          
                            <tr class="gradeC">
                                <td>{{$user->name}}</td>
                                <td> {{$user->email }}  </td>
                                <td style="text-align: center">{{$user->address}}</td>
                                <td style="text-align: center">{{$user->city}}</td>
                                <td style="text-align: center"> {{$user->state}} </td>
                                <td style="text-align: center">{{$user->country}}</td>
                                <td style="text-align: center"> {{$user->pincode}} </td>
                                <td style="text-align: center"> {{$user->mobile}} </td>
                                <td style="text-align: center; vertical-align: middle;">
                                <a href="{{route('userview.edit',$user->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                <a href="javascript:" rel="{{$user->id}}" rel1="delete-user" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
           var id=$(this).attr('rel');
           var deleteFunction=$(this).attr('rel1');
           swal({
               title:'Are you sure?',
               text:"You won't be able to revert this!",
               type:'warning',
               showCancelButton:true,
               confirmButtonColor:'#3085d6',
               cancelButtonColor:'#d33',
               confirmButtonText:'Yes, delete it!',
               cancelButtonText:'No, cancel!',
               confirmButtonClass:'btn btn-success',
               cancelButtonClass:'btn btn-danger',
               buttonsStyling:false,
               reverseButtons:true
           },function () {
              window.location.href="/admin/"+deleteFunction+"/"+id;
           });
        });
    </script>
@endsection