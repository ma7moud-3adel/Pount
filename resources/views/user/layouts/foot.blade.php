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

                                    <script>
                                        function sendMessage() {
                                            const phoneNumber = '01001018277';
                                            const message = 'Hello, I am interested in your product!';
                                            const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
                                            window.open(url, '_blank');
                                        }
                                    </script>

                                </div>
                            </div>
                            <div class="right-box">
                                <a class="btn-whats" href="https://wa.me/+201001018277">
                                    <button style="color: white;" onclick="sendMessage()"> ارسل لنا على واتس اب</button>
                                    <span class="txt mr-2"><span class="fa fa-whatsapp"></span></span>
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
        <!--End footer area-->

        <!--Start footer area -->
        <footer class="footer-area footer-area--style3">

            <!--Start Footer-->
            <div class="footer-style3">
                <div class="footer-style3-bg" style="background-image: url(assets/images/footer/footer-style3-bg.jpg);">
                </div>
                <div class="container">
                    <div class="row text-right-rtl">

                        <!--Start single footer widget-->
                        <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="single-footer-widget single-footer-widget--style3 marbtm50">
                                <div class="our-company-info">
                                    <div class="text-box">
                                        <p>تمتلك شركتنا سنوات من الخبرة في تقديم دهانات خارجية مبتكرة لضمان جمال وصحة
                                            مشاريعك</p>
                                        <div class="btn-box2">
                                            <a class="btn-one" href="{{ route('about') }}">
                                                <span class="txt">اعرف اكثر</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="footer-widget-gallery">
                                    <ul>
                                        <li>
                                            <div class="img-box">
                                                <img src="assets/images/footer/footer-widget-gallery-1.jpg"
                                                alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a class="lightbox-image" data-fancybox="gallery"
                                                        href="assets/images/footer/footer-widget-gallery-1-big.jpg">
                                                        <i class="flaticon-zoom"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-box">
                                                <img src="assets/img/g1.jpg"
                                                alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a class="lightbox-image" data-fancybox="gallery"
                                                        href="assets/images/footer/footer-widget-gallery-2-big.jpg">
                                                        <i class="flaticon-zoom"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-box">
                                                <img src="assets/images/footer/footer-widget-gallery-3.jpg"
                                                    alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a class="lightbox-image" data-fancybox="gallery"
                                                    href="assets/images/footer/footer-widget-gallery-3-big.jpg">
                                                        <i class="flaticon-zoom"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="img-box">
                                                <img src="assets/images/footer/footer-widget-gallery-4.jpg"
                                                alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a class="lightbox-image" data-fancybox="gallery"
                                                    href="assets/images/footer/footer-widget-gallery-4-big.jpg">
                                                    <i class="flaticon-zoom"></i>
                                                </a>
                                            </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div> --}}

                            </div>
                        </div>
                        <!--End single footer widget-->

                        <!--Start single footer widget-->
                        <div class="col-xl-4 col-lg-3 col-md-7 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="single-footer-widget single-footer-widget--style3">
                                <div class="title">
                                    <h3>روابط ذات صلة</h3>
                                </div>
                                <div class="footer-widget-links-2">
                                    <ul class="pull-left left">
                                        <li><a href="{{ route('about') }}">من نحن</a></li>
                                        <li><a href="{{ route('allproject') }}">مشاريعنا</a></li>
                                        <li><a href="{{ route('home') }}#ask">اسألة شائعة</a></li>
                                        <li><a href="{{ route('home') }}#testimonials">اراء</a></li>
                                    </ul>
                                    <ul class="pull-left marleft-60">
                                        <li><a href="{{ route('home') }}">الصفحة الرئيسية</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->

                        <!--Start single footer widget-->
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                            <div class="single-footer-widget single-footer-widget--style3 pdtop50">
                                <div class="title">
                                    <h3>تواصل معنا</h3>
                                </div>
                                <div class="footer-widget-contact-info footer-widget-contact-info--style2">
                                    <ul>
                                        <li>
                                            <div class="inner-icon">
                                                <span class="flaticon-phone-call-3"></span>
                                            </div>
                                            <div class="inner-text">
                                                <h6>معلومات الاتصال الرئيسية</h6>
                                                <p>الهاتف: <a
                                                        href="tel:{{ $data->phone_number }}">{{ $data->phone_number }}</a>
                                                </p>
                                                <p>البريد الالكتروني: <a
                                                        href="mailto:{{ $data->email }}">{{ $data->email }}</a> </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner-icon">
                                                <span class="flaticon-placeholder-2"></span>
                                            </div>
                                            <div class="inner-text">
                                                <h6>عنوان المعرض</h6>
                                                <p>{{ $data->address_1 }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="footer-social-link style2">
                                        <ul class="clearfix">
                                            <li><a target="_blank"
                                                    href="https://www.facebook.com/profile.php?id=61566938972759"><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a target="_blank" style="margin: 0 5px"
                                                    href="https://www.instagram.com/pountpaints/"><i
                                                        class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End single footer widget-->

                    </div>
                </div>



                <div class="footer-bottom-style3">
                    <div class="container">
                        <div class="footer-bottom-style3__content text-center">
                            <div style="color:white;" class="copyright">
                                {{-- <p>made by <a target="_blank" href="https://aelgamal.mallahsoft.com/portfolio/"> Ahmed Elgamal. --}}
                                {{-- </a> --}}
                                 &copy; 2024 All Rights Reserved.
                                {{-- </p> --}}
                            </div>
                        </div>
                    </div>
                </div>


            </div>
    @endforeach

</footer>
<!--End footer area-->


<button class="scroll-top scroll-to-target" data-target="html">
    <span class="flaticon-up-arrow"></span>

</button>

<div class="sticky-buttons">
    <a href="https://wa.me/+201001018277" class="whatsapp-button" target="_blank" aria-label="Chat with us on WhatsApp">
      <img src="https://img.icons8.com/color/48/000000/whatsapp.png" alt="WhatsApp Icon">
    </a>
    <a href="tel:+201001018277" class="call-button" aria-label="Call us">
    <img src="https://img.icons8.com/color/48/000000/phone.png" alt="Call Icon">
    </a>
  </div>




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
