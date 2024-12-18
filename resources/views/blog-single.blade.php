@extends('user.layouts.app')
@section('title')
    single-blog
@endsection
@section('content')
    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area style2">
        <div class="breadcrumb-area-bg" style="background-image: url({{ asset($blog->image) }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title blog-single" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <h1>{{ $blog->name }}</h1>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li class="active">{{ $blog->category }}</li>
                                <li><i class="fa fa-angle-left" aria-hidden="true"></i></li>
                                <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
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
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details-content">

                        <div class="single-blog-style1 single-blog-style1--blog-large blog-details wow fadeInUp"
                            data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ asset($blog->image) }}" alt="">
                                </div>
                                <div class="categories-date-box">
                                    <div class="categories-box">
                                        <h6><span class="flaticon-open-archive"></span>{{ $blog->category }}</h6>
                                    </div>
                                    <div class="date-box">
                                        <h3>{{ $day }}<br><span>{{ $month }}</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="top-text">
                                    <div class="top">
                                        <div class="inner-text">
                                            <p>{{ $blog->text }}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="inner">
                                        {!! $blog->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Start Thm Sidebar Box-->
                <div class="col-xl-4 col-lg-5">
                    <div class="thm-sidebar-box">

                        <div class="single-sidebar-box">
                            <div class="sidebar-title">
                                <div class="pattern-bg"
                                    style="background-image: url(assets/images/pattern/thm-pattern-7.png);">
                                </div>
                                <h3></span>مقالات مشابهة</h3> <span class="border-left">
                            </div>

                            <div class="sidebar-blog-post">
                                @php
                                    use Carbon\Carbon;
                                    use App\Models\Blog;
                                    $randomBlogs = Blog::where('id', '!=', $blog->id)
                                        ->take(3)
                                        ->inRandomOrder()
                                        ->get();
                                @endphp

                                @if ($randomBlogs->isEmpty())
                                    <p>No Blogs available</p>
                                @endif
                                <ul class="blog-post">
                                    @foreach ($randomBlogs as $item)
                                        @php
                                            $createdDate = Carbon::parse($item->created_at);
                                            $day = $createdDate->day;
                                            $month = $createdDate->format('F');
                                            $year = $createdDate->year;
                                            $fullDate = $createdDate->format('F j, Y');
                                        @endphp
                                        <li>
                                            <div class="inner" style="vertical-align: middle;">
                                                <div class="img-box">
                                                    <img src="{{ asset($item->image) }}" alt="Awesome Image">
                                                    <div class="overlay-content">
                                                        <a href="{{ route('blogat.show', $item->id) }}"><i
                                                                class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <div style="font-weight: bold;">
                                                        <a style="color: #e63a27;"
                                                            href="{{ route('blogat.show', $item->id) }}">{{ $item->name }}</a>
                                                    </div>
                                                    <div class="date">{{ $fullDate }}</div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="single-sidebar-box">
                            <div class="sidebar-title">
                                <div class="pattern-bg"
                                    style="background-image: url(assets/images/pattern/thm-pattern-7.png);">
                                </div>
                                <h3><span class="border-left"></span>كلمات مفتاحية</h3>
                            </div>
                            <div class="popular-tag-box">
                                <ul class="popular-tag">
                                    <li><a href="">{{ $blog->tag }}</a></li>
                                    @php
                                        $tags = explode('-', $blog->sub_tag);
                                    @endphp
                                    @foreach ($tags as $tags)
                                        <li><a href="">{{ $tags }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Thm Sidebar Box-->


            </div>

        </div>
    </section>
    <!--End Blog Page-->
@endsection
