<header id="header"><!--header-->


    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="{{asset('frontEnd/images/home/logo.png')}}" alt="" height="100" /></a>
                    </div>
                 
                </div>
                <div class="col-sm-8">  
                
                    <div class="shop-menu pull-right">
                   
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            @if(Auth::check())
                                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
                                 <li><a href="{{url('/myhistory')}}"><i class="fa fa-list" aria-hidden="true"></i>My Order History</a></li>
                              
                          
                            </li> 
                              <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a></li>
                            @else
                                <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
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
                            <li><a href="{{url('/')}}" class="active"> <i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li><a href="{{url('/list-products')}}">Shop</a></li>
                            <li class="dropdown"><a href="#">Join with Us<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                   
                                    <li><a href="{{url('/vendor_login')}}">Join as a Seller <i class="fa fa-user" ></i> </a></li>
                                    <li><a href="{{url('/myaccount')}}">Join as a Buyer <i class="fa fa-user" ></i></a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/contact')}}" >Contact</a></li>
                             <li><a href="{{url('/about')}}" >About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
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