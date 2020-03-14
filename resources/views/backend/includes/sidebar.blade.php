@if (Auth::check() && Auth::user()->role_id == 1)
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: url({{asset('backend/dist/img/sidebar5.png')}})">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('backend/dist/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Hygienic Food</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item" >
                    <a href="{{route('admin.dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{Request::is ('admin/category*') ? 'menu-open' : ''}} ">
                    <a href="#" class="nav-link">
                        <i class="fab fa-product-hunt"></i>
                        <p> Product-Manage
{{--                            <i class="fas fa-angle-left right"></i>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.subcategory.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub-Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.brand.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Brand</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview {{Request::is ('admin/slider*') ? 'menu-open' : ''}} ">
                    <a href="" class="nav-link">
                        <i class="fab fa-product-hunt"></i>
                        <p> Blog

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.blog-category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.blog-post.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog Post</p>
                            </a>
                        </li>


                    </ul>
                </li>       <li class="nav-item has-treeview {{Request::is ('admin/blog-category*') ? 'menu-open' : ''}} ">
                    <a href="{{route('admin.slider.index')}}" class="nav-link">
                        <i class="fab fa-product-hunt"></i>
                        <p> Sliders
                        </p>
                    </a>

                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

@else
    <h2 class="text-danger text-center m-5">Your don't have permission to access here.</h2>
@endif
