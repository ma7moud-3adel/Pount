@extends('user.layouts.app')
@section('title')
    Single Product
@endsection
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
                            <h1>{{ $product->name }}</h1>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
                                <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
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
                            {{-- <div class="rate-box">
                                <h3>جنيه {{ $product->price }}</h3>
                            </div> --}}
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
                                            <span class="txt">طلب عينة </span>
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
                                            <h2> طلب عينة من المنتج</h2>
                                        </div>
                                        <div class="contact-form">
                                            <form id="contact-form" class="default-form2" method="POST"
                                                action="{{ route('product.order.store') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <input type="text" name="name" id="name_"
                                                                placeholder="الاسم" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <input type="email" name="email" id="email_"
                                                                placeholder="البريد الالكتروني" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <input type="text" name="phone" id="phone_"
                                                                placeholder="رقم الهاتف">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <input type="text" name="address" id="address_"
                                                                placeholder="العنوان">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <input type="hidden" name="product_id" id="product_id_"
                                                                value="{{ $product->id }}">
                                                            <input type="text" disabled value="{{ $product->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6">
                                                        <div class="input-box">
                                                            <select class="wide" name="count" id="count_">
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
                                                            <textarea name="message" id="message_" placeholder="ملاحظات" required=""></textarea>
                                                        </div>
                                                        <div class="button-box">
                                                            <button class="btn-one" type="submit"
                                                                data-loading-text="تم الارسال">
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
                            {{-- <li data-tab="#desc" class="tab-btn"><span>وصف المنتج</span></li> --}}
                            <li data-tab="#review" class="tab-btn active-btn">
                                <span>
                                    <p style="display: inline; margin-right: 5px;" id="numOfComments">
                                        {{ $product->comments->count() }} </p>تعليقات
                                </span>

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
                                        <div class="row d-flex justify-content-center" id="comments">
                                            <!--Start Single Review Box Outer-->
                                            @foreach ($product->comments as $comment)
                                                <div class="col col-md-6 col-sm-12 mb-1" id="comment">
                                                    <div class="single-review-box-outer" style="padding: 15px">
                                                        <div class="single-review-box">
                                                            <div class="img-box">
                                                                <img src="{{ asset('assets') }}/img/shop/review-1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="text-box">
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
                                            <h2>اضافة تعليق</h2>
                                        </div>
                                        <form id="review-form" method="POST" action="{{ route('comment.store') }}">
                                            @csrf
                                            <div class="row d-flex align-items-center">
                                                <input type="hidden" name="product_id" id="product_id"
                                                    value="{{ $product->id }}">

                                                <div class="input-box col col-md-8">
                                                    <textarea name="content" id="content" placeholder="Enter Your comment..." style="height: 59px" required></textarea>
                                                </div>

                                                <div class="input-box col col-md-4">
                                                    @auth
                                                        <input type="hidden" name="user_name"
                                                            value="{{ Auth::user()->name }}">
                                                    @else
                                                        <input type="text" name="user_name" id="user_name"
                                                            placeholder="Enter Your Name ..." required>
                                                    @endauth
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
                                                                <span class="txt">اضافة التعليق</span>
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

            <div class="related-product-box mt-5">
                <div class="shop-page-title">
                    <h2>منتجات ذات صلة</h2>
                </div>
                <div class="row">
                    @php
                        use App\Models\Product;
                        $randomProducts = Product::with('category')
                            ->where('category_id', $product->category_id)
                            ->where('id', '!=', $product->id)
                            ->take(4)
                            ->inRandomOrder()
                            ->get();
                    @endphp

                    @if ($randomProducts->isEmpty())
                        <p>No products available</p>
                    @endif

                    @foreach ($randomProducts as $data)
                        <!--Start Single Shop Item-->
                        <div class="col-md-3 col-sm-12">
                            <div class="single-shop-item">
                                <div class="single-shop-item_inner">
                                    <div class="img-holder">
                                        <img src="{{ asset($data->image) }}" alt="">
                                        <div class="overlay">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('show.product', $data->id) }}">
                                                        <i class="fa fa-link"></i> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <h3><a href="{{ route('show.product', $data->id) }}">{{ $data->name }}</a></h3>
                                        {{-- <div class="review-box">
                                            <ul>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                                <li><i class="flaticon-star-of-favorites-outline"></i></li>
                                            </ul>
                                        </div> --}}
                                        {{-- <h6 style="direction: rtl">{{ $data->price }} جنيه</h6> --}}
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

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#review-form").on('submit', function(event) {
                event.preventDefault();

                var product_id = $("#product_id").val();
                var content = $("#content").val();
                var user_name = $("#user_name").val();
                var comments = $("#comments");
                var numOfComments = $("#numOfComments").text()
                let commentCount = parseInt(numOfComments)

                console.log("num", numOfComments, "parse", commentCount)

                if (!content || !user_name) {
                    toastr.error("Please fill in all fields.");
                    return;
                }

                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                var loading = $("#loading");
                loading.show();

                $.ajax({
                    url: "{{ route('comment.store') }}",
                    method: 'POST',
                    data: {
                        _token: csrfToken,
                        product_id: product_id,
                        content: content,
                        user_name: user_name
                    },
                    dataType: 'JSON',
                    success: function(response) {
                        console.log(response)
                        loading.hide();
                        if (response.success) {
                            toastr.success('Comment has been sent successfully!');
                            comments.append(`
                                            <div class="col col-md-6 col-sm-12 mb-1" id="comment">
                                                <div class="single-review-box-outer" style="padding: 15px">
                                                    <div class="single-review-box">
                                                        <div class="img-box">
                                                            <img src="{{ asset('assets') }}/img/shop/review-1.jpg"
                                                                alt="">
                                                    </div>
                                                        <div class="text-box">
                                                            <h3>${response.data.user_name}
                                                            <span
                                                                style="font-size: 12px;display:block;margin-top:-1px;font-weight:300;font-style: italic;">
                                                                    just Now
                                                                </span>
                                                            </h3>
                                                            <p> ${response.data.content} </p>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        `);
                            $("#content").val('');
                            $("#user_name").val('');
                            $("#content").focus();
                            $('#numOfComments').text(parseInt(commentCount + 1));
                            // numOfComments.innerHTML = `تعليقات(${count(response.data)})`;
                        } else {
                            if (response.errors) {
                                for (var field in response.errors) {
                                    toastr.error(response.errors[field].join(", "));
                                }
                            } else {
                                toastr.error('There was an error sending the comment.');
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        loading.hide();
                        console.log(error);
                        toastr.error(
                            'An error occurred while sending your comment. Please try again.'
                        );
                    }
                });

            });
            $("#contact-form").on('submit', function(event) {
                event.preventDefault();

                var name = $("#name_").val();
                var email = $("#email_").val();
                var phone = $("#phone_").val();
                var address = $("#address_").val();
                var product_id = $("#product_id_").val();
                var count = $("#count_").val();
                var message = $("#message_").val();

                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: "{{ route('product.order.store') }}",
                    method: 'POST',
                    data: {
                        _token: csrfToken,
                        name: name,
                        email: email,
                        phone: phone,
                        address: address,
                        product_id: product_id,
                        count: count,
                        message: message
                    },
                    dataType: 'JSON',
                    success: function(response) {
                        if (response.success) {
                            toastr.success('Order has been sent successfully!');

                            $("#name_").val('');
                            $("#email_").val('');
                            $("#phone_").val('');
                            $("#address_").val('');
                            $("#count_").val('');
                            $("#message_").val('');
                        } else {
                            if (response.errors) {
                                for (var field in response.errors) {
                                    toastr.error(response.errors[field].join(", "));
                                }
                            } else {
                                toastr.error('There was an error sending the order.');
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                        toastr.error(
                            'An error occurred while sending your order. Please try again.'
                        );
                    }
                });
            });
        });
    </script>
@endsection
