<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link ml-2">
        {{-- <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <span class="brand-text font-italic text-uppercase" style="letter-spacing: 3.5px;">Point</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block">
                    {{ Auth::guard('admin')->user()->name }}
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item mb-3">
                    <a href="{{ route('admin.home') }}"
                        class="nav-link {{ Request::route()->getName() == 'admin.home' ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            {{ trans('main.Dashboard') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('category') }}"
                        class="nav-link {{ Request::route()->getName() == 'category' ||
                        Request::route()->getName() == 'category.create' ||
                        Request::route()->getName() == 'category.edit' ||
                        Request::route()->getName() == 'category.show'
                            ? 'active'
                            : '' }} ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            {{ trans('main.Category') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('product') }}"
                        class="nav-link {{ Request::route()->getName() == 'product' ||
                        Request::route()->getName() == 'product.create' ||
                        Request::route()->getName() == 'product.edit' ||
                        Request::route()->getName() == 'product.show'
                            ? 'active'
                            : '' }}  ">
                        <i class="nav-icon ion ion-bag"></i>
                        <p>
                            {{ trans('main.Product') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('project.admin') }}"
                        class="nav-link {{ Request::route()->getName() == 'project.admin' ||
                        Request::route()->getName() == 'project.admin.create' ||
                        Request::route()->getName() == 'project.admin.edit' ||
                        Request::route()->getName() == 'project.admin.show'
                            ? 'active'
                            : '' }}  ">
                        <i class="nav-icon ion ion-bag"></i>
                        <p>
                            {{ trans('main.Project') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('message') }}"
                        class="nav-link {{ Request::route()->getName() == 'message' ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            {{ trans('main.Message') }}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="d-flex align-center justify-content-center mt-5">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <a class="btn btn-danger" href="{{ route('admin.logout') }}" role="button"
                    onclick="event.preventDefault();this.closest('form').submit();">Log Out</a>
            </form>
        </div>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
