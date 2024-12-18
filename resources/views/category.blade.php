@extends('user.layouts.app')
@section('title')
    Categories
@endsection
@section('content')
    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url({{ asset($category->image) }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <h1>{{ $category->name }}</h1>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
                                <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                                <li class="active">{{ $category->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <!--Start Product Details Area-->
    <section class="product-details-area">
        <div class="container">
            {{-- <div class="row">
                <div class="col col-md-6 col-sm-12">
                    <div class="product-details-image-box">
                        <div class="product-details-main-image">
                            <ul class="bxslider">
                                <li>
                                    <div class="single-box clearfix">
                                        <div class="img-holder">
                                            <img src="{{ asset($category->image) }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col col-md-6 col-sm-12">
                    <div class="product-details-content-box">
                        <div class="top">
                            <div class="product-title">
                                <h2>{{ $category->name }}</h2>
                            </div>
                        </div>
                        <div class="product-description">
                            <p>{!! $category->description !!}</p>
                        </div>
                    </div>
                </div>
            </div> --}}



            <div class="related-product-box">
                <div class="row d-flex justify-content-center">
                    @if ($category->products->isEmpty())
                        <div class="d-flex justify-content-center col">
                            <p>لا توجد اي منتجات بعد ...</p>
                        </div>
                    @else
                        @foreach ($category->products as $product)
                            <!--Start Single Shop Item-->
                            <div class="col col-md-3 col-sm-12">
                                <div class="single-shop-item">
                                    <div class="single-shop-item_inner">
                                        <div class="img-holder">
                                            <img src="{{ asset($product->image) }}" alt="">
                                            <div class="overlay">
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('show.product', $product->id) }}">
                                                            <i class="fa fa-link"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="title-holder">
                                            <h3><a href="{{ route('show.product', $product->id) }}">{{ $product->name }}</a>
                                            </h3>
                                            {{-- <div class="review-box">
                                            <ul>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                            </ul>
                                        </div> --}}
                                            {{-- <h6 style="direction: rtl">{{ $product->price }} جنيه</h6> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Shop Item-->
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--End Product Details Area-->
@endsection
