@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')

    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
       
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">

            @if(Session::has('vendorUser')) 
            <li class="bg_lg"> <a href="{{url('/vendor_account')}}"> <i class="icon-group"></i> <span class="label label-important"></span> My account</a> </li>
            @else
                <li class="bg_ls"> <a href="{{route('admin.userview.vendors')}}"> <i class="icon-group"></i> <span class="label label-important"></span> Sellers</a> </li>
                <li class="bg_lg"> <a href="{{route('admin.userview.buyers')}}"> <i class="icon-group"></i> <span class="label label-important"></span> Buyers</a> </li>
                 <li class="bg_ls"> <a href="{{route('admin.user.index')}}"> <i class="icon-group"></i> <span class="label label-important"></span> Users</a> </li>

                 <li class="bg_dy "> <a href="{{route('admin.order.listview')}}"> <i class="icon-exchange"></i> Sales</a> </li>
                <li class="bg_lg"> <a href="{{route('category.index')}}"> <i class="icon-group"></i> <span class="label label-important"></span> Category</a> </li>
                <li class="bg_dy "> <a href="{{route('product.index')}}"> <i class="icon-exchange"></i> Products</a> </li>

            @endif

            </ul>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/excanvas.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.flot.min.js')}}"></script>
    <script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.dashboard.js')}}"></script>
    <script src="{{asset('js/jquery.gritter.min.js')}}"></script>
    <script src="{{asset('js/matrix.interface.js')}}"></script>
    <script src="{{asset('js/matrix.chat.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script src="{{asset('js/jquery.wizard.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.form_validation.js')}}"></script>
    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();
                }
                // else, send page to designated URL
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
@endsection