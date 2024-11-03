@extends('admin.layouts.app')
@section('title')
    {{ trans('main.Home') }}
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ count(App\Models\Category::all()) }}</h3>

                            <p>Categories</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{ route('category') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ count(App\Models\Product::all()) }}</h3>

                            <p>Products</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{ route('product') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ count(App\Models\Project::all()) }}</h3>

                            <p>Projects</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('project.admin') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ count(App\Models\Message::all()) }}</h3>

                            <p>Messages</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-chatboxes"></i>
                        </div>
                        <a href="{{ route('message') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            {{-- <div class="row">
                <div class="col">
                    <div class="contact-page-map-outer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27628.454402089425!2d31.414972584439898!3d30.049570392392578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583d7e9d54ed9f%3A0x93996d766a7ce17d!2z2KLYrtixINmD2YjYqNix2Yog2KfZhNiq2KzZhdi5INin2YTYo9mI2YQoINmF2K3ZiNixINmF2LXYt9mB2Ykg2YPYp9mF2YQgKSDYqNi52K8g2KPZg9in2K_ZitmF2YrYqSDYp9mE2LTYsdi32KkgKCDYqNin2LPZhSAp!5e0!3m2!1sen!2seg!4v1729691604202!5m2!1sen!2seg" width="100%" height="666px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection

@section('title_page')
    {{ trans('main.Dashboard_home') }}
@endsection
