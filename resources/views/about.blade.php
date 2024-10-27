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
                                <h2>من نحن</h2>
                            </div>
                            <div class="breadcrumb-menu" data-aos="fade-up" data-aos-easing="linear"
                                data-aos-duration="1500">
                                <ul>
                                    <li><a href="{{route('home')}}">الصفحةالرئيسية</a></li>
                                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                    <li class="active">من نحن</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start About Style2 Area-->
        <section class="about-style2-area">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6">
                        <div style="direction: rtl;" class="about-style2__content">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h6><span class="border-right"></span>عن الشركة</h6>
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="text">
                                    <p>متخصصون فى صناعة مادة الواجهات مثل ( جرافياتو اكريلك – ماربل – جرانوليت – المادة الاسمنتية – معجون البلاستيك والسيلر والعديد من المواد التى تخضع للأبحاث والتطوير وفقا للمواصفات المحلية والدولية .</p>
                                </div>
                                <h5>إليك بعض المميزات التي تجعل باونت باينت خيارًا مثاليًا</h5>
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-quality"></span>
                                        </div>
                                        <div class="inner-text">
                                            <h3> الجودة والاعتمادية</h3>
                                            <p>نستخدم أفضل أنواع الدهانات التي تضمن متانة وألوان زاهية تدوم لسنوات طويلة ونحرص على ان تكون خالية من المواد الضارة</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-settings"></span>
                                        </div>
                                        <div class="inner-text">
                                            <h3> التجديد والابتكار</h3>
                                            <p>افضل انواع الدهانات التي تضمن متانة والوان زاهية تدوم لسنوات طويلة</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-home-repair"></span>
                                        </div>
                                        <div class="inner-text">
                                            <h3>الخبرة</h3>
                                            <p>جميع منتجاتنا وخدماتنا معتمدة من قبل هيئات الجودة العالمية، مما يضمن لك الحصول على أفضل النتائج </p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="authorised-person-info">
                                    <div class="name">
                                        <h3>Benjamin Everett.</h3>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="about-style2__image-box">
                            <div class="big-title paroller">pount </div>
                            <div class="img-box1 js-tilt">
                                <img src=".assets/img/about02.jpg" alt="">
                            </div>
                            <div class="img-box2">
                                <div class="inner">
                                    <img src="assets/img/about01.jpg" alt="">
                                </div>
                            </div>

                            <div class="overlay-box">
                                <h2>12<span class="flaticon-plus-1"></span></h2>
                                <h3>سنة من<br> ألخبرة</h3>
                            </div>

                            <div class="icon-box">
                                <span class="flaticon-house-with-wooden-roof"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End About Style2 Area-->

        <!--Start Choose Style2 Area-->
        <section class="choose-style2-area about-page pd120-0-90">
            <div class="container">
                <div class="sec-title center text-center">
                    <div class="sub-title">
                        <h6><span class="border-right"></span> لماذا تختارنا <span class="border-left"></span></h6>
                    </div>
                    <h2>اسباب تجعلنا الاختيار الانسب</h2>
                </div>
                <div class="row">
                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-protection"></span></div>
                                <div class="counting-box">01</div>
                                <div class="text">
                                    <h3>الامان والموثوقية</h3>
                                    <p>نستخدم فقط المواد التي تم اختبارها واعتمادها لضمان سلامتها وعدم احتوائها على مواد ضارة بالصحة أو البيئة</p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="#">تفاصيل اكثر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-quality"></span></div>
                                <div class="counting-box">02</div>
                                <div class="text">
                                    <h3>جودة الخامات</h3>
                                    <p>نستخدم مواد أولية عالية الجودة تم اختيارها بعناية لضمان متانة الدهانات ومقاومتها للعوامل الجوية.
                                    </p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="#">تفاصيل اكثر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-construction-and-tools"></span></div>
                                <div class="counting-box">03</div>
                                <div class="text">
                                    <h3>فريق محترف</h3>
                                    <p>فريق مدرب لخدمتك</p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="#">تفاصيل اكثر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->

                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-fast-delivery"></span></div>
                                <div class="counting-box">04</div>
                                <div class="text">
                                    <h3>Quick Response</h3>
                                    <p>Foresee the pain trouble that bounds ensue and equaly blame.</p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="services-details.html">تفاصيل اكثر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-insurance"></span></div>
                                <div class="counting-box">05</div>
                                <div class="text">
                                    <h3>Fully Insured</h3>
                                    <p>Except to obtain some advantage it but who has any right to find.</p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="services-details.html">تفاصيل اكثر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->
                    <!--Start Single Choose Box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-choose-box mar-b-30">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-diploma"></span></div>
                                <div class="counting-box">06</div>
                                <div class="text">
                                    <h3>Guarantee Service</h3>
                                    <p>Except to obtain some advantage it but who has any right to find.</p>
                                    <div class="btn-box">
                                        <a class="btn-two" href="services-details.html">تفاصيل اكثر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Choose Box-->

                </div>
            </div>
        </section>
        <!--End Choose Style2 Area-->


        <!--Start Partner Area-->
        <section class="partner-area partner-area--style2">
            <div class="auto-container">
                <ul class="partner-box partner-carousel owl-carousel owl-theme owl-dot-style1">
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/img/brand/brand-logo-v2-1.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/img/brand/brand-logo-v2-2.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/img/brand/brand-logo-v2-3.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/img/brand/brand-logo-v2-4.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/img/brand/brand-logo-v2-5.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                </ul>
            </div>
        </section>
        <!--End Partner Area-->

@endsection
