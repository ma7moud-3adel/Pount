@extends('user.layouts.app')

@section('content')
    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg" style="background-image: url({{ asset($product->image) }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <h2>{{ $product->name }}</h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li class="active">{{ $product->name }}</li>
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
                                            <img src="{{ asset($product->image) }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-box clearfix">
                                        <div class="img-holder">
                                            <img src="{{ asset($product->image_0) }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-box clearfix">
                                        <div class="img-holder">
                                            <img src="{{ asset($product->image_1) }}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="slider-pager">
                            <ul class="thumb-box">
                                <li>
                                    <a class="active" data-slide-index="0" href="#">
                                        <div class="thumb-image">
                                            <img width="100" src="{{ asset($product->image) }}"
                                                alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#">
                                        <div class="thumb-image">
                                            <img width="100" src="{{ asset($product->image_0) }}"
                                                alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#">
                                        <div class="thumb-image">
                                            <img width="100" src="{{ asset($product->image_1) }}"
                                                alt="Awesome Thumb Image">
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col col-md-6 col-sm-12">
                    <div class="product-details-content-box">
                        <div class="top">
                            <div class="product-title">
                                <h2>{{ $product->name }}</h2>
                            </div>
                            <div class="rate-box">
                                <h3>${{ $product->price }}</h3>
                            </div>
                        </div>
                        <div class="product-description">
                            <p>{!! $product->description !!}</p>
                        </div>

                        <div class="product-quantity-box-outer d-flex justify-content-end">
                            <div class="product-quantity-box">
                                <div class="right">
                                    <div class="cart-box">
                                        <button type="button" data-toggle="modal" data-target="#myModal" class="btn-one"
                                            type="submit">
                                            <span class="txt">Make order</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- popup####################333 -->

                        <div class="modal fade" id="myModal" role="dialog" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div style="text-align: center;" class="contact-style1_form">
                                        <div class="top-title">
                                            <h2>طلب منتج</h2>
                                        </div>
                                        <div class="contact-form">
                                            <form id="contact-form" class="default-form2" method="POST"
                                                action="{{ route('product.order.store') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <input type="text" name="name" placeholder="الاسم"
                                                                required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <input type="email" name="email"
                                                                placeholder="البريد الالكتروني" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <input type="text" name="phone"
                                                                placeholder="رقم الهاتف">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <input type="text" name="address" placeholder="العنوان">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                            <input type="text" disabled value="{{ $product->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <select class="wide" id="selectCount" name="count">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12 text-center">
                                                        <div class="input-box two">
                                                            <textarea name="message" placeholder="ملاحظات" required=""></textarea>
                                                        </div>
                                                        <div class="button-box">
                                                            <button class="btn-one" type="submit"
                                                                data-loading-text="انتظر من فضلك...">
                                                                <span class="txt">ارسال</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- &&&&&&&&&&&&&&&&&&&&&&&&&&& -->

                    </div>
                </div>
            </div>

            <!--Start product tab box-->
            <div class="row">
                <div class="col-md-12">
                    <div class="product-tab-box tabs-box">
                        <ul class="tab-btns tab-buttons clearfix text-center">
                            <li data-tab="#desc" class="tab-btn"><span>Description</span></li>
                            <li data-tab="#review" class="tab-btn active-btn">
                                <span>Reviews ({{ App\Models\Comment::count() }})</span>
                            </li>
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

                            <div class="tab active-tab" id="review">
                                <div class="product-details-tab-content">
                                    <!--Start Review Box Outer-->
                                    <div class="review-box-outer">
                                        <div class="row d-flex justify-content-center">
                                            <!--Start Single Review Box Outer-->
                                            @foreach ($product->comments as $comment)
                                                <div class="col">
                                                    <div class="single-review-box-outer">
                                                        <div class="single-review-box">
                                                            <div class="img-box">
                                                                <img src="{{ asset('assets') }}/img/shop/review-1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="text-box">
                                                                {{-- <div class="review-box">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div> --}}
                                                                <h3>{{ $comment->user_name ?? 'Anonymous' }}
                                                                    <span
                                                                        style="font-size: 12px;display:block;margin-top:-1px;font-weight:300;font-style: italic;">
                                                                        in {{ $comment->created_at->diffForHumans() }}
                                                                    </span>
                                                                </h3>
                                                                <p>{{ $comment->content }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <!--End Single Review Box Outer-->
                                            @if ($product->comments->isEmpty())
                                                <p>لا توجد تعليقات متاحة.</p>
                                            @endif
                                        </div>
                                    </div>
                                    <!--End Review Box Outer-->

                                    <!--Start Review Form-->
                                    <div class="review-form text-right-rtl">
                                        <div class="title-box">
                                            <h2>Add Your Comments</h2>
                                        </div>
                                        <form id="review-form" method="POST" action="{{ route('comment.store') }}">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
                                                <div class="input-box col">
                                                    <div class="field-label">Comments</div>
                                                    <textarea name="content" placeholder="Enter Your comment..." required></textarea>
                                                </div>
                                            </div>

                                            {{-- <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="add-rating-box">
                                                        <div class="add-rating-title">
                                                            <p>Your Rating</p>
                                                        </div>
                                                        <div class="review-box">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="button-box">
                                                        <div class="left">
                                                            <button class="btn-one" type="submit">
                                                                <span class="round"></span>
                                                                <span class="txt">Submit</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--End Review Form-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End product tab box-->

            <div class="related-product-box">
                <div class="shop-page-title">
                    <h2>Related Products</h2>
                </div>
                <div class="row">
                    @php
                        use App\Models\Product;
                        $data = Product::take(4)->get();
                    @endphp
                    @foreach ($data as $data)
                        <!--Start Single Shop Item-->
                        <div class="col col-md-6 col-sm-12">
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
                                        <h3><a href="{{ route('show.product', $data->id) }}">{{ $data->name }}</a></h3>
                                        <div class="review-box">
                                            <ul>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                            </ul>
                                        </div>
                                        <h6>${{ $data->price }}</h6>
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
