<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
       
       @if(Session::has('vendorUser')) 
       <li {{$menu_active==1? ' class=active':''}}><a href="{{url('/vendor_home')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
       <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Products</span></a>
            <ul>
                <li><a href="{{url('product/create')}}">Add New Products</a></li>
                <li><a href="{{url('product/index')}}">List Products</a></li>
            </ul>
        </li>
       @else
       <li {{$menu_active==1? ' class=active':''}}><a href="{{url('/admin')}}"><i class="icon icon-dashboard"></i> <span>Dashboard</span></a> </li>
       <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Add New Category</a></li>
                <li><a href="{{route('category.index')}}">List Categories</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-truck"></i> <span>Products</span></a>
            <ul>
              {{--  <li><a href="{{url('/admin/product/create')}}">Add New Products</a></li>--}}
                <li><a href="{{route('product.index')}}">List Products</a></li>
            </ul>
        </li>
 

          <li class="submenu {{$menu_active==5? ' active':''}}"> <a href="#"><i class="icon icon-inbox"></i> <span>Orders</span></a>
            <ul> 
                
            <li><a href="{{route('admin.order.listview')}}">List orders</a></li>
             
            </ul>
        </li>
        <li class="submenu {{$menu_active==6? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Users</span></a>
            <ul>
               
                <li><a href="{{route('admin.userview.vendors')}}">Sellers</a></li>
                <li><a href="{{route('admin.userview.buyers')}}">Buyers</a></li>
                <li><a href="{{route('admin.user.index')}}">All users</a></li>
               
            </ul>
        </li>


       @endif
       

      
    </ul>
</div>
<!--sidebar-menu-->