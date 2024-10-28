@extends('user.layouts.app')

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
                            <h2>المشاريع</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">المشاريع</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Shop Page One-->
    <section class="shop-page-one">
        <div class="shop-page-one_inner">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <!--Start Single Shop Item-->
                    @foreach ($projects as $project)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-shop-item">
                                <div class="single-shop-item_inner">
                                    <div class="img-holder">
                                        <img src="{{ $project->image }}" alt="">
                                        <div class="overlay">
                                            <ul>
                                                <li>
                                                    <a class="lightbox-image" data-fancybox="gallery"
                                                        href="{{ asset($project->image) }}">
                                                        <i class="flaticon-zoom"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ redirect()->back() }}">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h3><a href="{{ redirect()->back() }}">{{ $project->title }}</a></h3>
                                        <div class="review-box">
                                            <ul>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--End Single Shop Item-->


                </div>
                {{-- <div class="d-flex justify-content-center">
                        {{ $data->links() }}
                    </div> --}}
            </div>
        </div>
    </section>
    <!--End Shop Page One-->
@endsection
