@extends('backEnd.layouts.master')
@section('title','List Products')
@section('content')
    <div id="breadcrumb"> <a href="" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="" class="current">Products</a></div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done!</strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>List Products</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                    @if(Session::has('vendorUser')) 
                    <th>ID</th>
                        <th>Image</th>
                        <th>Product Name</th> 
                        <th>Code Of Product</th>
                        <th>Product Color</th>
                        <th>Price</th>
                        <th>Image Gallery</th>
                        <th>Add Attribute</th>
                        <th>Action</th>
                    @else   
                       <th>ID</th>
                       <th>User Id</th>
                        <th>Image</th>
                        <th>Product Name</th>
                       <th>Under Category</th>
                        <th>Code Of Product</th>
                        <th>Product Color</th>
                        <th>Price</th>
                        <th>Action</th>
                    @endif  
                     
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <?php $i++; ?>
                        <tr class="gradeC">
                            <td>{{$i}}</td>
                            @if(Session::has('vendorUser')) 

                                 <td style="text-align: center;"><img src="{{url('products/small',$product->image)}}" alt="" width="50"></td>
                            <td style="vertical-align: middle;">{{$product->p_name}}</td>
                       
                            <td style="vertical-align: middle;">{{$product->p_code}}</td>
                            <td style="vertical-align: middle;">{{$product->p_color}}</td>
                            <td style="vertical-align: middle;">{{$product->price}}</td>
                            <td style="vertical-align: middle;text-align: center;"><a href="{{route('image-gallery.show',$product->id)}}" class="btn btn-default btn-mini">Add Images</a></td>
                            <td style="vertical-align: middle;text-align: center;"><a href="{{route('product_attr.show',$product->id)}}" class="btn btn-success btn-mini">Add Attr</a></td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="#myModal{{$product->id}}" data-toggle="modal" class="btn btn-info btn-mini">View</a>
                                <a href="{{route('backEnd.products.edit',$product->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                <a href="javascript:" rel="{{$product->id}}" rel1="delete-product" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                            </td> 


                            @else  

                            <td style="vertical-align: middle;">{{$product->user_id}}</td>   
                            <td style="text-align: center;"><img src="{{url('products/small',$product->image)}}" alt="" width="50"></td>
                            <td style="vertical-align: middle;">{{$product->p_name}}</td>
                            <td style="vertical-align: middle;">{{$product->category->name}}</td>
                            <td style="vertical-align: middle;">{{$product->p_code}}</td>
                            <td style="vertical-align: middle;">{{$product->p_color}}</td>
                            <td style="vertical-align: middle;">{{$product->price}}</td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="#myModal{{$product->id}}" data-toggle="modal" class="btn btn-info btn-mini">View</a>
                                <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                
                            </td> 




                            @endif  
                          
                        </tr>
                        {{--Pop Up Model for View Product--}}
                        <div id="myModal{{$product->id}}" class="modal hide">
                            <div class="modal-header">
                                <button data-dismiss="modal" class="close" type="button">×</button>
                                <h3>{{$product->p_name}}</h3>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><img src="{{url('products/small',$product->image)}}" width="100" alt="{{$product->p_code}}"></div>
                                <p class="text-center">{{$product->description}}</p>
                            </div>
                        </div>
                        {{--Pop Up Model for View Product--}}
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
    <script src="{{asset('js/matrix.popover.js')}}"></script>
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
                window.location.href="/product/"+deleteFunction+"/"+id;
            });
        });
    </script>
@endsection