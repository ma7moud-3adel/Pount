@extends('user.layouts.app')
@section('title')
    blog-section
@endsection
@section('content')
    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url(assets/img/shop02.jpg);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <h1> المقالات </h1>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
                                <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                                <li class="active">صفحة المقالات</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <!--Start Blog Page-->
    <section class="blog-page blog-page-one">
        <div class="container">

            <div class="row text-right-rtl">
                @php
                    use Carbon\Carbon;
                @endphp
                <!--Start Single blog Style1-->
                @foreach ($data as $item)
                    @php
                        $createdDate = Carbon::parse($item->created_at);
                        $day = $createdDate->day;
                        $month = $createdDate->format('F');
                        $year = $createdDate->year;
                        $fullDate = $createdDate->format('F j, Y');
                    @endphp
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-blog-style1 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img style="height: 240px; object-fit:cover;" src="{{ asset($item->image) }}"
                                        alt="">
                                </div>
                                <div class="categories-date-box">
                                    <div class="categories-box">
                                        <h6><span class="flaticon-open-archive"></span>{{ $item->category }}</h6>
                                    </div>
                                    <div class="date-box">
                                        <h3>{{ $day }}<br><span>{{ $month }}</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">
                                    <a href="{{ route('blogat.show', $item->id) }}">{{ $item->name }}</a>
                                </h3>
                                <div class="text">
                                    <p>{{ $item->text }}</p>
                                </div>
                                <div class="bottom-box">
                                    <div class="pattern-bg"
                                        style="background-image: url(assets/images/pattern/thm-pattern-7.png);"></div>
                                    <div class="left">
                                        <a class="btn-two" href="{{ route('blogat.show', $item->id) }}">تفاصيل اكثر</a>
                                    </div>
                                    <div class="right">
                                        <ul>
                                            <li><a href="">
                                                    <span id="h"class="fa fa-heart-o"></span>{{ $item->likes }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End Single blog Style1-->
            </div>
        </div>
    </section>
    <!--End Blog Page-->
@endsection
