<!--Header-part-->
<div id="header">
<h1><a href="{{url('/admin')}}">E Mart</a></h1>
    <p> Admin </p>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
    
        
    @if(Session::has('vendorUser')) 
    <li class=""></li>
   
    <li><a href="{{ url('/logout_vendor') }}"><i class="icon icon-signout"></i> Logout </a></li>

    @else
    <li class=""><a title="" href="{{url('/admin/settings')}}"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
  
    
        <li class="">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
               <i class="icon icon-signout"></i>{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </li>
     @endif
     <li class=""><a title="" href=""><i class="icon-user"></i> <span class="text"></span></a></li>
    <li class=""><a title="" href=""><i class="icon-bell"></i><span class="text"></span></a></li>
    <li class=""><a href="#"><span class="text"> Hello {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a></span></li>


    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->