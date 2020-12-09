<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/vendor_dashboard')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Products</span></a>
            <ul>
                <li><a href="{{url('/product/create')}}">Add New Products</a></li>
                <li><a href="{{route('vendors.myproducts')}}">List Products</a></li>
            </ul>
        </li>

        
      
    </ul>
</div>
<!--sidebar-menu-->