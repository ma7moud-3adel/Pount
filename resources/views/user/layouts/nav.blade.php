<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pount Paints</title>

    <!-- Cairo Font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

    <!-- Inline CSS to Apply Cairo Font -->
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a,
        .text {
            font-family: 'Cairo', sans-serif;
        }
    </style>

    <!-- Other stylesheets -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHZXXTZ4" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



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
                        <p>اتصل بنا</p>
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
                                                        <h6><a>{{ $data->address_1 }}</a></h6>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text">
                                                        <h6><a>{{ $data->address_2 }}</a></h6>
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
                                                    <h6><a href="mailto:{{ $data->email }}">{{ $data->email }}</a>
                                                    </h6>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-social-link-style2">
                                        <ul class="clearfix">
                                            <li><a href="https://www.facebook.com/profile.php?id=61566938972759">><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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
                                            <ul
                                                class="navigation clearfix d-flex align-items-center justify-content-center flex-row-reverse">
                                                <li
                                                    class="dropdown {{ Request::route()->getName() == 'home' ? 'current' : '' }}">
                                                    <a href="{{ route('home') }}">الصفحة الرئيسية</a>
                                                </li>
                                                <li
                                                    class="dropdown {{ Request::route()->getName() == 'about' ? 'current' : '' }}">
                                                    <a href="#">الشركة</a>
                                                    <ul>
                                                        <li><a href="{{ route('about') }}">من نحن</a></li>
                                                        <li><a href="{{ route('allproject') }}">مشاريعنا</a></li>
                                                        <li><a href="{{ route('home') }}#ask">اسألة شائعة</a></li>
                                                        <li><a href="{{ route('home') }}#testimonials">اراء</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="{{ route('home') }}#servises">خدماتنا</a>
                                                </li>
                                                <li
                                                    class="dropdown {{ Request::route()->getName() == 'shop' || Request::route()->getName() == 'show.product' ? 'current' : '' }}">
                                                    <a href="{{ route('shop') }}">المتجر</a>
                                                </li>
                                                <li
                                                    class="dropdown {{ Request::route()->getName() == 'blogat.index' || Request::route()->getName() == 'blogat.show' ? 'current' : '' }}">
                                                    <a href="{{ route('blogat.index') }}">المقالات</a>
                                                </li>
                                                {{-- <li><a href="{{ route('home') }}#contact">تواصل</a></li> --}}
                                                @auth
                                                    <form method="POST" action="{{ route('logout') }}"
                                                        style="display: inline-block; margin: 0 10px;">
                                                        @csrf
                                                        <a class="btn btn-danger btn-xs text-sm"
                                                            href="{{ route('logout') }}" role="button"
                                                            onclick="event.preventDefault();this.closest('form').submit();">Out</a>
                                                    </form>
                                                @else
                                                    <form method="POST" action="{{ route('logout') }}"
                                                        style="display: none;">
                                                        @csrf
                                                        <a class="btn btn-danger btn-xs text-sm"
                                                            href="{{ route('logout') }}" role="button"
                                                            onclick="event.preventDefault();this.closest('form').submit();">Out</a>
                                                    </form>
                                                @endauth
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
                    <a href="{{ route('home') }}"><img src="{{ asset('assets') }}/img/logoT.png" alt="Awesome Logo"
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
                                src="{{ asset('assets') }}/img/logo.png" alt="" title=""></a></div>
                    <ul class="res-ul">
                        <li><a style="color: white; margin:6px auto;" href="{{ route('home') }}">الصفحة الرئيسية</a>
                        </li>
                        <li><a style="color: white; margin:6px auto;" href="{{ route('about') }}">من نحن</a></li>
                        <li><a style="color: white; margin:6px auto;" href="{{ route('allproject') }}">مشاريعنا</a>
                        </li>
                        <li><a style="color: white; margin:6px auto;" href="{{ route('shop') }}">المتجر</a></li>
                    </ul>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li>
                                <a target="_blank" href="https://www.facebook.com/profile.php?id=61566938972759"><span
                                        class="fab fa fa-facebook-square"></span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" style="margin: 0 5px"
                                    href="https://www.instagram.com/pountpaints/"><i class="fa fa-instagram"
                                        aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        {{-- <li>
                                <a target="_blank" style="margin: 0 5px"
                                    href="https://www.instagram.com/pountpaints/"><i class="fa-brands fa-tiktok"></i>
                                </a>
                                    </li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

            <!-- Google Tag Manager (noscript) -->
            {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RV7LQ7Q" height="0"
                    width="0" style="display:none;visibility:hidden"></iframe></noscript> --}}
            <!-- End Google Tag Manager (noscript) -->
        </header>
    @endforeach
</body>

</html>
