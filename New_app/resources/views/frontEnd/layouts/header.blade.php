<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
     <!--     <div class="container">
            <div class="row">
               <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                         <li><a href="#"><i class="fa fa-phone"></i> 010 010010</a></li>                         <li><a href="#"><i class="fa fa-envelope"></i> info@emart.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
    </div><!--/header_top-->

    <div class="header-middle "><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4" > 
                    <div class="logo-pull-left">
                        <a class="logo" href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/logo111.png')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8" > 
                      <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            
                            @if(Auth::check())
                                <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
                                </li>
                            @else
                                 <li><a href="#loginModal" data-toggle="modal"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!-- Please Log in Modal HTML -->
<div id="loginModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title"><b>You have not Logged In</b></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
				</div>
				<div class="modal-body">					
					<p> Proceed to login</p>
					<p class="text-warning"><strong>This action cannot be done.</strong></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <a class="btn btn-success" href="{{url('/login_page')}}">Log In</a>
				</div>
			</form>
		</div>
	 </div>
  </div>
</div>

<!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                      <!--home icon-->      
                            <li><a href="{{url('/')}}" class="active"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
</svg></a></li>
                            <li><a href="{{url('/list-products')}}">Shop E Mart</a></li>
                               
     <!--                           
                          <li class="dropdown"><a href="#">Join Us<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{url('/myaccount')}}">Join as a Seller  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></a></li>
                                    <li><a href="{{url('/myaccount')}}">Join as a Buyer   <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg></a></li>
                                </ul>
                            </li> --> 
                             <li><a href="{{url('/myaccount')}}" >Join Us</a></li>
                            <li><a href="{{url('/contact')}}" >Contact</a></li>
                             <li><a href="{{url('/about')}}" >About Us</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="search_box pull-right">
                        <form  type="get" action ="{{url('search')}}">
                        <input type="search" name="query" placeholder="Search"/>
                     </form>
                         </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->