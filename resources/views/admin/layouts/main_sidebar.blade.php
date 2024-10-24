<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home') }}" class="brand-link ml-2">
        <span class="brand-text font-italic text-uppercase" style="letter-spacing: 3.5px;">Pount</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-center justify-content-between">
            <div class="d-flex align-center justify-content-center">
                <div class="image">
                    <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info">
                    <a href="" class="d-block">
                        {{ Auth::guard('admin')->user()->name }}
                    </a>
                </div>
            </div>
            <div class="d-flex align-center justify-content-center">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <a class="btn btn-danger btn-xs text-sm" href="{{ route('admin.logout') }}" role="button"
                        onclick="event.preventDefault();this.closest('form').submit();">Log Out</a>
                </form>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open mb-3">
                    <a href="#"
                        class="nav-link {{ Request::route()->getName() == 'admin.home' || Request::route()->getName() == 'sitting' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            {{ trans('main.Dashboard') }}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item mx-3">
                            <a href="{{ route('admin.home') }}"
                                class="nav-link {{ Request::route()->getName() == 'admin.home' ? 'active' : '' }} ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    {{ trans('main.Home') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="{{ route('sitting') }}"
                                class="nav-link {{ Request::route()->getName() == 'sitting' ? 'active' : '' }}">
                                <i class="fas fa-cog nav-icon"></i>
                                <p>{{ trans('main.Sitting') }}</p>
                            </a>
                        </li>
                    </ul>
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
                        <i class="nav-icon ion ion-stats-bars"></i>
                        <p>
                            {{ trans('main.Project') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('slider') }}"
                        class="nav-link {{ Request::route()->getName() == 'slider' ||
                        Request::route()->getName() == 'slider.create' ||
                        Request::route()->getName() == 'slider.edit' ||
                        Request::route()->getName() == 'slider.show'
                            ? 'active'
                            : '' }}  ">
                        <i class="nav-icon fas fa-image mr-2"></i>
                        <p>
                            {{ trans('main.Slider') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview mb-3">
                    <a href="#"
                        class="nav-link {{ Request::route()->getName() == 'message' || Request::route()->getName() == 'comment' ? 'active' : '' }}">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                            <span
                                class="badge badge-info right">{{ App\Models\Message::count() + App\Models\Comment::count() }}</span>
                        </p>
                    </a>
                    <!-- ----  -->
                    <ul class="nav nav-treeview">
                        <li class="nav-item mx-3">
                            <a href="{{ route('message') }}"
                                class="nav-link {{ Request::route()->getName() == 'message' ? 'active' : '' }} ">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>
                                    {{ trans('main.Message') }}
                                    <span class="badge badge-info right">{{ App\Models\Message::count() }}</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="{{ route('comment') }}"
                                class="nav-link {{ Request::route()->getName() == 'comment' ? 'active' : '' }} ">
                                <i class="nav-icon fas fa-comments"></i>
                                <p>
                                    {{ trans('main.Comment') }}
                                    <span class="badge badge-info right">{{ App\Models\Comment::count() }}</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('order') }}"
                        class="nav-link {{ Request::route()->getName() == 'order' || Request::route()->getName() == 'order.create' ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            {{ trans('main.Order') }}
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a href="{{ route('testimonial') }}"
                        class="nav-link {{ Request::route()->getName() == 'testimonial' || Request::route()->getName() == 'testimonial.create' ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-star"></i>
                        <p>
                            {{ trans('main.Testimonial') }}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
