@extends('user.layouts.app')

@section('content')
    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url({{ asset($project->image) }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>{{ $project->title }}</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">{{ $project->title }}</li>
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
            <div class="row">
                <div class="col col-md-6 col-sm-12">
                    <div class="product-details-image-box">
                        <div class="product-details-main-image">
                            <ul class="bxslider">
                                <li>
                                    <div class="single-box clearfix">
                                        <div class="img-holder">
                                            <img src="{{ asset($project->image) }}" alt="Awesome Image">
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
                                <h2>{{ $project->title }}</h2>
                            </div>
                        </div>
                        <div class="product-description">
                            <p>{!! $project->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Start product tab box-->
            <div class="row">
                <div class="col-md-12">
                    <div class="product-tab-box tabs-box">
                        <ul class="tab-btns tab-buttons clearfix text-center">
                            <li data-tab="#desc" class="tab-btn"><span>Description</span></li>
                        </ul>
                        <div class="tabs-content">
                            <div class="tab" id="desc">
                                <div class="product-details-tab-content">
                                    <div class="product-description-content">
                                        <div class="text">
                                            <p>Nor again is there anyone who loves or pursues or desires to pain of
                                                itself, because it is pain, but because occasionally circumstances
                                                occur in which toil and paincan procure him some great pleasure. To
                                                take a trivial example, which of us ever undertakes laborious except
                                                to obtain some advantage from it? But who has any right to find
                                                fault with a man who chooses.</p>
                                            <p>Must explain to you how all this mistaken idea of denouncing pleasure
                                                and praising pain was born and I will give you a completed great of
                                                the great explorer of the truth, the master-builder of human
                                                happiness except to obtain some advantage.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End product tab box-->

            <div class="related-product-box">
                <div class="shop-page-title">
                    <h2>Related Projects</h2>
                </div>
                <div class="row d-flex justify-content-center">
                    @php
                        use App\Models\Project;
                        $data = Project::take(4)->get();
                    @endphp
                    @foreach ($data as $data)
                        <!--Start Single Shop Item-->
                        <div class="col col-md-3 col-sm-12">
                            <div class="single-shop-item">
                                <div class="single-shop-item_inner">
                                    <div class="img-holder">
                                        <img src="{{ asset($data->image) }}" alt="">
                                        <div class="overlay">
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h3><a href="{{ route('show.product', $data->id) }}">{{ $data->title }}</a></h3>
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
                        <!--End Single Shop Item-->
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--End Product Details Area-->
@endsection
