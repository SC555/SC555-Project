@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom" class="current"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_ls"> <a href="index.html"> <i class="icon-group"></i> <span class="label label-important">20</span> Sellers</a> </li>
                <li class="bg_lg"> <a href="index.html"> <i class="icon-group"></i> <span class="label label-important">10</span> Buyers</a> </li>
                <li class="bg_dy "> <a href="charts.html"> <i class="icon-exchange"></i> Sales</a> </li>
              
            </ul>
        </div>
    </div>
<div class="container-fluid">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>New <b>Users</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><span>View All</span><i class="icon-eye-open"></i> </a>
						<a href="#deleteEmployeeModal" class="btn btn-warning" data-toggle="modal"><span> Manage</span><i class="icon-pencil"></i> </a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Action</th>
                        <th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
                        <th>Type</th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="icon-pencil" data-toggle="tooltip" title="Edit"></i></a>
							<a href="#" class="delete" data-toggle="modal"><i class="icon-eye-open" data-toggle="tooltip" title="view" ></i></a>
						</td>
                        <td></td>
						<td>Saman Kumara</td>
						<td>Saman@gmail.com</td>
						<td>89 ,flower street,kandy</td>
						<td>(171) 555-2222</td>
                        <td>Seller</td>
						
					</tr>
					<tr>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="icon-pencil" data-toggle="tooltip" title="Edit"></i></a>
							<a href="#" class="delete" data-toggle="modal"><i class="icon-eye-open" data-toggle="tooltip" title="view" ></i></a>
						</td>
                           <td></td>
						<td>Don Perera</td>
						<td>dperera@mail.com</td>
						<td>No.5, Angoda</td>
						<td>(313) 555-5735</td>
                           <td>Seller</td>
						
					</tr>
					<tr>
<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="icon-pencil" data-toggle="tooltip" title="Edit"></i></a>
							<a href="#" class="delete" data-toggle="modal"><i class="icon-eye-open" data-toggle="tooltip" title="view" ></i></a>
						</td>
                           <td></td>
						<td>Maria Silva</td>
						<td>marias@mail.com</td>
						<td>25, cross street, kurunegala</td>
						<td>(503) 555-9931</td>
                        <td>Seller</td>
					
					</tr>
					<tr>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="icon-pencil" data-toggle="tooltip" title="Edit"></i></a>
							<a href="#" class="delete" data-toggle="modal"><i class="icon-eye-open" data-toggle="tooltip" title="view" ></i></a>
						</td>
                           <td></td>
						<td>Russel Herath</td>
						<td>rherath@mail.com</td>
						<td>No.102, Sinha Mawatha,Colombo</td>
						<td>(204) 619-5731</td>
                        <td>Buyer</td>
					
					</tr>					
					<tr>
					<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="icon-pencil" data-toggle="tooltip" title="Edit"></i></a>
							<a href="#" class="delete" data-toggle="modal"><i class="icon-eye-open" data-toggle="tooltip" title="view" ></i></a>
						</td>
                           <td></td>
						<td>Martin Appuharmy</td>
						<td>martina@mail.com</td>
						<td>Martin villa, Kandy</td>
						<td>(480) 631-2097</td>
                        <td>Buyer</td>
					</tr> 
				</tbody>
			</table>
        </div>
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