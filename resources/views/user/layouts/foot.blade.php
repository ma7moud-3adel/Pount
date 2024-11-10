<!--Start footer area -->
<footer class="footer-area">

    @php
        use App\Models\Sitting;
        $data = Sitting::all();
    @endphp
    @foreach ($data as $data)
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="footer-top__content">
                            <div class="left-box">
                                <div class="footer-logo">
                                    <a href="{{ route('home') }}"><img src="{{ asset('assets') }}/img/logo.png"
                                            alt=""></a>
                                </div>
                                <div class="title">
                                    <h3>اتصل بنا</h3>
                                    <p>سنكون سعداء بخدمتك</p>
                                </div>
                            </div>
                            <div class="right-box">
                                <a class="btn-one one" href="{{ route('about') }}">
                                    <span class="txt">اعرف اكثر</span>
                                </a>
                                <a class="btn-one two" href="tel:{{ $data->phone_number }}">
                                    <span class="flaticon-headphone"></span><span
                                        class="txt">{{ $data->phone_number }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Start Footer-->
        <div class="footer">
            <div class="container">
                <div class="row text-right-rtl">

                    <!--Start single footer widget-->
                    <div class="col col-md-4 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="single-footer-widget marbtm50">
                            <div class="title">
                                <h3>عن الشركة</h3>
                            </div>
                            <div class="our-company-info">
                                <div class="text-box">
                                    <p>{{ $data->about }}</p>
                                    {{-- <p>متخصصون فى صناعة مادة الواجهات مثلجرافياتو اكريلك – ماربل – جرانوليت – المادة
                                    الاسمنتية – معجون البلاستيك والسيلر والعديد من المواد التى تخضع للأبحاث والتطوير
                                    وفقا للمواصفات المحلية والدولية .
                                </p> --}}
                                </div>
                                <ul>
                                    <li>
                                        <h6>مواعيد المعرض</h6>
                                        <p>السبت- الخميس: 10 صباحاحتى 10 مساءا</p>
                                    </li>
                                </ul>
                                <div class="btn-box">
                                    <a class="btn-one" href="{{ route('about') }}">
                                        <span class="txt">اعرف اكثر</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->

                    <!--Start single footer widget-->
                    <div class="col col-md-4 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                        <div class="single-footer-widget">
                            <div class="title">
                                <h3>تواصل معنا</h3>
                            </div>
                            <div class="footer-widget-contact-info">
                                <ul>
                                    <li>
                                        <h6>معلومات الاتصال الرئيسية</h6>
                                        <p>الهاتف: <a href="tel:{{ $data->phone_number }}">{{ $data->phone_number }}</a>
                                        </p>
                                        <p>البريد الالكتروني: <a
                                                href="mailto:{{ $data->email }}">{{ $data->email }}</a>
                                        </p>
                                    </li>
                                    <li>
                                        <h6>عنوان المعرض</h6>
                                        <p>{{ $data->address_1 }}</p>
                                    </li>
                                    <li>
                                        <h6>عنوان المصنع</h6>
                                        <p>{{ $data->address_2 }}</p>
                                    </li>
                                </ul>
                                <div class="footer-social-link">
                                    <ul class="clearfix">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->

                    <!--Start single footer widget-->
                    <div class="col col-md-4 col-sm-12 wow animated fadeInUp" data-wow-delay="0.7s">
                        <div class="single-footer-widget pdtop50">
                            <div class="title">
                                <h3>منشورات مشابهة</h3>
                            </div>
                            <ul class="widget-posts-box">
                                <li>
                                    <div class="inner">
                                        <div class="img-box">
                                            <img src="{{ asset('assets') }}/img/footer/footer-widget-post-1.jpg"
                                                alt="Awesome Image">
                                            <div class="overlay-content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="title-box">
                                            <p>20, Jul 2022</p>
                                            <h4><a href="#">طلاء جديد<br> في مصانعنا</a></h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <div class="img-box">
                                            <img src="{{ asset('assets') }}/img/footer/footer-widget-post-2.jpg"
                                                alt="Awesome Image">
                                            <div class="overlay-content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="title-box">
                                            <p>15, Jun 2022</p>
                                            <h4><a href="#">طلاء جديد<br> في مصانعنا</a></h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <!--End single footer widget-->
                </div>
            </div>
        </div>
        <!--End Footer-->

        <div class="footer-bottom">
            <div class="container">
                <div class="bottom-inner">
                    <div class="copyright">
                        <p>Copyright &copy; 2024<a href="index.html"> Rrs.</a> All Rights Reserved.</p>
                    </div>
                    <div class="footer-menu">
                        <ul class="footer-nav">
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</footer>
<!--End footer area-->


<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.enllax.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/knob.js') }}"></script>
<script src="{{ asset('assets/js/map-script.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/pagenav.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('assets/js/validation.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/color-switcher.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-sidebar-content.js') }}"></script>

<script src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>

<script src="{{ asset('assets/js/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>

@yield('js')

<!-- thm custom script -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
