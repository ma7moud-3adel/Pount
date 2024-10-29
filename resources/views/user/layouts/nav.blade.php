@php
    use App\Models\Sitting;
    $data = Sitting::all();
@endphp
@foreach ($data as $data)
    <header class="main-header header-style-three">
        <div class="header-style-three__inner">
            <div class="main-logo-box-three header-contact-info3">
                <div class="icon">
                    <span class="flaticon-telephone"></span>
                </div>
                <div class="text">
                    <p>Make a Call</p>
                    <h3><a href="tel:{{ $data->phone_number }}">{{ $data->phone_number }}</a></h3>
                </div>
            </div>
            <!--Start Header Top-->
            <div class="header-style-three__header-content">
                <div class="header-top-style3">
                    <div class="container">
                        <div class="outer-box">

                            <div class="header-top-style3__left">
                                <div class="welcome-text">
                                    <div class="header-contact-info text-right-rtl">
                                        <ul>
                                            <li>
                                                <div class="text">
                                                    <h6><a>المصنع : 67 المنطقة الصناعية مدينة بدر</a></h6>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="text">
                                                    <h6><a>المعرض: {{ $data->address }}</a></h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="header-top-style3__right">
                                <div class="header-contact-info header-contact-info--style2 text-right-rtl">
                                    <ul>
                                        <li>
                                            <div class="icon">
                                                <span class="flaticon-email-1"></span>
                                            </div>
                                            <div class="text">
                                                <h6><a href="mailto:{{ $data->email }}">{{ $data->email }}</a></h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-social-link-style2">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="serach-button-style1">
                                    <button type="button" class="search-toggler">
                                        <i class="icon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Header Top-->

                <!--Start Header-->
                <div class="header-style3">
                    <div class="container">
                        <div class="outer-box">
                            <div class="nav-outer style3 clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <div class="inner">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </div>
                                </div>
                                <!-- Main Menu -->
                                <nav class="main-menu style3 navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="dropdown current"><a href="{{ route('home') }}">الصفحة
                                                    الرئيسية</a> </li>
                                            <li class="dropdown"><a href="#">الشركة</a>
                                                <ul>
                                                    <li><a href="{{ route('about') }}">من نحن</a></li>
                                                    <li><a href="{{ route('allproject') }}">مشاريعنا</a></li>
                                                    <li><a href="{{ route('home') }}#ask">اسألة شائعة</a></li>
                                                    <li><a href="{{ route('home') }}#testimonials">اراء</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="{{ route('home') }}#servises">خدماتنا</a>
                                            </li>
                                            <li class="dropdown"><a href="{{ route('home') }}#blogs">اخبار</a></li>
                                            <li class="dropdown"><a href="{{ route('shop') }}">المتجر</a></li>
                                            <li><a href="{{ route('home') }}#contact">تواصل</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End header-->
            </div>

            <div class="header-contact-info3">
                <div class="logo-bg"></div>
                <a href="{{ route('home') }}"><img src="{{ asset('assets') }}/img/logo.png" alt="Awesome Logo"
                        title=""></a>
            </div>

        </div>

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="{{ route('home') }}" class="img-responsive"><img
                                src="{{ asset('assets') }}/img/logo.png" alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--End Sticky Header-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ route('home') }}"><img
                            src="{{ asset('assets') }}/img/resources/mobilemenu-logo.png" alt=""
                            title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                        <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
    </header>
@endforeach
