<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
     <li class="nav-item">
       <a href="{{ route('admin') }}" class="nav-link">
         <i class="nav-icon fas fa-tachometer-alt"></i>
         <p>
           Dashboard
         </p>
       </a>
     </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shopping-bag"></i>
        <p>
          Products
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ url('admin/product/add') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Add New</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/products') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>View Products</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-box-open"></i>
        <p>
          Orders
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ url('/admin/orders') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>All Orders</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/orders/pending') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Pending Orders</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/orders/processing') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Processing Orders</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/orders/delivered') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Delivered Orders</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('/admin/orders/canceled') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Canceled Orders</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="{{ url('admin/categories') }}" class="nav-link">
        <i class="nav-icon fas fa-th-list"></i>
        <p>
          Categories
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('admin/sliders') }}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Slider
        </p>
      </a>
    </li>
    {{-- <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
         Seller
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{route('seller.add')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Add New</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('seller.view')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>View Seller</p>
          </a>
        </li>
      </ul>
    </li> --}}
    {{-- <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
         Vendor
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
        <a href="{{route('vendor.add')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Add New</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('vendor.view')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>View Vendor</p>
          </a>
        </li>
      </ul>
    </li> --}}
    {{-- <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Pages
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        @foreach(App\Page::all() as $page)
        <li class="nav-item">
          <a href="{{ url('admin/pages/'.$page->slug) }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>{{ $page->title }}</p>
          </a>
        </li>
        @endforeach
      </ul>
    </li> --}}
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-globe"></i>
        <p>
          Settings
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ url('admin/info/update') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Basic info</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/mail/settings') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Email Settings</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/delivery/update') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Delivery Details</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/code/update') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Custom Code</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('admin/changepass') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Change Password</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
        <i class="nav-icon far fa-circle text-info"></i>
        <p>Logout</p>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </li>
  </ul>
</nav>
