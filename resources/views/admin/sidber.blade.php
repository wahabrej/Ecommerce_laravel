<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Mark Stephen</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="admin/index.html"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{url('view_category')}}"> <i class="icon-grid"></i>Category </a></li>
                <li><a href="{{url('/view_product')}}"> <i class="fa fa-bar-chart"></i>Add Product </a></li>
                <li><a href="{{url('/show_product')}}"> <i class="fa fa-bar-chart"></i>Show Product </a></li>
                <li><a href="{{url('/order_show')}}"> <i class="fa fa-bar-chart"></i>Order </a></li>
        </ul>
       
      </nav>