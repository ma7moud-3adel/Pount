@extends('user.layouts.app')

@section('content')
    <!-- Start Main Slider -->
    <section class="main-slider style1">
        <div class="slider-box">
            <!-- Banner Carousel -->
            <div class="banner-carousel owl-theme owl-carousel">

                @foreach ($slider as $slide)
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url({{ asset($slide->image) }})">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                <div class="big-title">
                                    <h2>{{ $slide->title }}</h2>
                                </div>
                                <div class="text">
                                    <p>{!! $slide->text !!}</p>
                                </div>
                                <div class="btns-box">
                                    <a class="btn-one" href="{{ route('about') }}">
                                        <span class="txt">اعرف اكثر</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Main Slider -->

    <!--Start Service Style1 Area-->
    <section id="servises" class="service-style1-area">
        <div class="pattern-bg" style="background-image: url(assets/img/pattern/thm-pattern-2.png);"></div>
        <div class="container">
            <div class="sec-title center text-center">
                <div class="sub-title">
                    <h6><span class="border-right"></span> منتجاتنا <span class="border-left"></span></h6>
                </div>
                <h2>اهم المنتجات التي نقدمها</h2>
            </div>
            <div class="row d-flex justify-content-center">
                <!--Start Single Service Style1-->
                @foreach ($products as $product)
                    <div class="col-xl-4 col-lg-12 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="single-service-style1">
                            <div class="inner-box">
                                <div class="img-holder">
                                    <img src="{{ $product->image }}" alt="">
                                </div>
                                <div class="title-holder">
                                    <div class="pattern-bg"
                                        style="background-image: url(assets/img/pattern/thm-pattern-1.png);"></div>
                                    <div class="inner-text">
                                        <h6>من اهم منتجاتنا</h6>
                                        <h3><a href="{{ route('show.product', $product->id) }}"> {{ $product->name }}</a>
                                        </h3>
                                        <div class="text">
                                            <p>{!! $product->description !!}</p>
                                        </div>
                                    </div>
                                    <div class="button-box">
                                        <a href="{{ route('show.product', $product->id) }}">تفاصيل </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End Single Service Style1-->
            </div>

            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="service-style1__bottom-text">
                        <div class="btns-box">
                            <a class="btn-one style2" href="{{ route('shop') }}">
                                <span class="txt">جميع المنتجات</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Service Style1 Area-->

    <!--Start About Style1 Area-->
    <section class="about-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-style1__image1 martop0">
                        <div class="inner">
                            <img src="assets/img/p1.jpeg" alt="">
                        </div>
                        <div class="arrow-box">
                            <div class="dot-top"></div>
                            <div class="top-angle-line"></div>
                            <div class="line"></div>
                            <div class="dot-bottom"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-style1__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h6><span class="border-left"></span>بونت للدهانات</h6>
                            </div>
                            <h2><br> التميز والجودة<br> مهمتنا</h2>
                        </div>
                        <div class="inner-content">
                            <ul>
                                <li><span class="flaticon-quality"></span> الجودة والاعتمادية</li>
                                <li><span class="flaticon-settings"></span> التجديد والابتكار</li>
                                <li><span class="flaticon-home-repair"></span> الخبرة</li>
                            </ul>
                            <div class="text-box">
                                <p>متخصصون فى صناعة مادة الواجهات مثل جرافياتو اكريلك – ماربل – جرانوليت – المادة الاسمنتية
                                    – معجون البلاستيك والسيلر والعديد من المواد التى تخضع للأبحاث والتطوير وفقا للمواصفات
                                    المحلية والدولية .</p>
                                <p>تتم عملية الإنتاج وفقا لنظام آلي متكامل .</p>
                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="{{ route('about') }}">
                                    <span class="txt">اعرف اكثر</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Style1 Area-->

    <!--Start Features Style1 Area-->
    <section class="features-style1-area">
        <div class="pattern-bg" style="background-image: url(assets/img/pattern/thm-pattern-4.png);"></div>
        <div class="container features-box">
            <div class="row">
                <!--Start Single Features Style1-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="100ms"
                    data-wow-duration="1500ms">
                    <div class="single-features-style1 first-child text-center">
                        <div class="single-features-style1__bg" style="background-image: url(assets/img/p1.jpeg);"></div>
                        <div class="counting-box"></div>
                        <div class="inner">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="flaticon-protection"></span>
                                </div>
                                <h3>الاعتمادية<br> والامان</h3>
                            </div>
                            <div class="overlay-content">
                                <h3>الجودة<br> والامان</h3>
                                <p> نستخدم أفضل أنواع الدهانات التي تضمن متانة وألوان زاهية تدوم لسنوات طويلة ونحرص على ان
                                    تكون خالية من المواد الضارة، مما يجعلها آمنة للبيئة وللأفراد</p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a href="services-details.html">تفاصيل <span class="fa fa-angle-right"></span< /a>
                        </div>
                    </div>
                </div>
                <!--End Single Features Style1-->
                <!--Start Single Features Style1-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="200ms"
                    data-wow-duration="1500ms">
                    <div class="single-features-style1 text-center">
                        <div class="single-features-style1__bg" style="background-image: url(assets/img/p1.jpeg);"></div>
                        <div class="counting-box"></div>
                        <div class="inner">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="flaticon-quality"></span>
                                </div>
                                <h3>اعلى جودة <br> للخامات</h3>
                            </div>
                            <div class="overlay-content">
                                <h3>اعلى جودة <br> للخامات</h3>
                                <p>أفضل أنواع الدهانات التي تضمن متانة وألوان زاهية تدوم لسنوات طويلة</p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a href="services-details.html">تفاصيل <span class="fa fa-angle-right"></span< /a>
                        </div>
                    </div>
                </div>
                <!--End Single Features Style1-->
                <!--Start Single Features Style1-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <div class="single-features-style1 bordernone text-center">
                        <div class="single-features-style1__bg" style="background-image: url(assets/img/p1.jpeg);"></div>
                        <div class="counting-box"></div>
                        <div class="inner">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="flaticon-construction-and-tools"></span>
                                </div>
                                <h3>فريق<br> محترف</h3>
                            </div>
                            <div class="overlay-content">
                                <h3>فريق<br> محترف</h3>
                                <p>فريقنا يتكون من خبراء وفنيين معتمدين يمتلكون الخبرة والمعرفة اللازمة لاحتياجاتك</p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a href="services-details.html">تفاصيل <span class="fa fa-angle-right"></span< /a>
                        </div>
                    </div>
                </div>
                <!--End Single Features Style1-->
                <!--Start Single Features Style1-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="400ms"
                    data-wow-duration="1500ms">
                    <div class="single-features-style1 text-center">
                        <div class="single-features-style1__bg" style="background-image: url(assets/img/p1.jpeg);"></div>
                        <div class="counting-box"></div>
                        <div class="inner">
                            <div class="static-content">
                                <div class="icon">
                                    <span class="flaticon-certificate"></span>
                                </div>
                                <h3>شهادات<br> الجودة</h3>
                            </div>
                            <div class="overlay-content">
                                <h3>شهادات<br> الجودة</h3>
                                <p>جميع منتجاتنا وخدماتنا معتمدة من قبل هيئات الجودة العالمية، مما يضمن لك الحصول على أفضل
                                    النتائج</p>
                            </div>
                        </div>
                        <div class="button-box">
                            <a href="services-details.html">تفاصيل <span class="fa fa-angle-right"></span< /a>
                        </div>
                    </div>
                </div>
                <!--End Single Features Style1-->

            </div>
        </div>

        <div class="fact-counter-box">
            <div class="container">
                <div class="sec-title center text-center">
                    <div class="sub-title">
                        <h6><span class="border-right"></span>ارقام وانجازات <span class="border-left"></span>
                        </h6>
                    </div>
                    <h2< /h2>
                </div>
                <div class="row">
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="pattern-bg"
                                    style="background-image: url(assets/img/pattern/thm-pattern-3.png);"></div>
                                <div class="icon">
                                    <span class="flaticon-roof-3"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="115">0</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>مشاريع كاملة</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="100ms"
                            data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="pattern-bg"
                                    style="background-image: url(assets/img/pattern/thm-pattern-3.png);"></div>
                                <div class="icon">
                                    <span class="flaticon-worker"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="46">0</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>خبراء ومهندسين</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="pattern-bg"
                                    style="background-image: url(assets/img/pattern/thm-pattern-3.png);"></div>
                                <div class="icon">
                                    <span class="flaticon-award"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="62">0</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>اهداف تم تحقيقها</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                    <!--Start Single Fact Counter-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-fact-counter text-center wow slideInUp" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="pattern-bg"
                                    style="background-image: url(assets/img/pattern/thm-pattern-3.png);"></div>
                                <div class="icon">
                                    <span class="flaticon-happy"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="99">0</span>
                                    <span class="k">%</span>
                                </div>
                            </div>
                            <div class="title">
                                <h3>عملاء سعداء</h3>
                            </div>
                        </div>
                    </div>
                    <!--End Single Fact Counter-->
                </div>
            </div>
        </div>

    </section>
    <!--End Features Style1 Area-->

    <!--Start Project Style1 Area-->
    <section id="projects" class="project-style1-area">
        <div class="container">
            <div class="project-top-title">
                <div class="sec-title">
                    <div class="sub-title">
                        <h6><span class="border-right"></span>سابقة الاعمال</h6>
                    </div>
                    <h2>اعمال تم تنفيذها</h2>
                </div>
                <div class="project-style1__button">
                    <a class="btn-one" href="{{ route('allproject') }}">
                        <span class="txt">جميع المشاريع</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="auto-container">
            <div class="row text-right-rtl d-flex">
                <!--Start Single project Item-->
                @foreach ($projects as $project)
                    <div class="col-4">
                        <div class="single-project-item">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ asset($project->image) }}" alt="Awesome Image">
                                </div>
                                <div class="overlay-content text-center">
                                    <p>Commercial</p>
                                    <h3><a href="{{ route('show.project', $project->id) }}">{{ $project->title }}</a>
                                    </h3>
                                    <div class="border-box"></div>
                                    <ul>
                                        <li>
                                            <a class="lightbox-image" data-fancybox="gallery"
                                                href="{{ asset($project->image) }}">
                                                <i class="flaticon-zoom"></i>
                                            </a>
                                        </li>
                                        <li><a href="{{ route('show.project', $project->id) }}"><span
                                                    class="flaticon-plus-1"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--End Single project Item-->
            </div>
        </div>
    </section>
    <!--End Project Style1 Area-->

    <!--Start Working process area -->
    <section class="working-process-area">
        <div class="container">
            <div class="sec-title center text-center">
                <div class="sub-title">
                    <h6><span class="border-right"></span> كيف يتم العمل <span class="border-left"></span></h6>
                </div>
                <h2>آليات العمل معنا</h2>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <ul class="working-process-box">
                        <!--Start Working process Single-->
                        <li class="single-working-process wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/img/c1.jpg" alt="">
                                    <div class="counting-box">
                                        <div class="count"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>اختيار الخامات والالوان</h3>
                                <p>اختر ألوانًا تتناسب مع البيئة المحيطة بمنزلك أو مبناك، سواء كانت طبيعية أو حضرية.</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="services-details.html">اعرف اكثر</a>
                                </div>
                            </div>
                        </li>
                        <!--End Working process Single-->
                        <!--Start Working process Single-->
                        <li class="single-working-process wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/img/d1.jpg" alt="">
                                    <div class="counting-box">
                                        <div class="count"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>الدفع</h3>
                                <p>نقدم مجموعة متنوعة من طرق الدفع لتسهيل عملية الشراء وضمان راحتك</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="services-details.html">اعرف اكثر</a>
                                </div>
                            </div>
                            <div class="arrow-icon"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
                            </div>
                        </li>
                        <!--End Working process Single-->
                        <!--Start Working process Single-->
                        <li class="single-working-process wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/img/c2.jpg" alt="">
                                    <div class="counting-box">
                                        <div class="count"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3>استلم منتجاتك</h3>
                                <p>نحرص على أن تكون عملية استلام المنتج سهلة ومريحة لك</p>
                                <div class="btn-box">
                                    <a class="btn-two" href="services-details.html">اعرف اكثر</a>
                                </div>
                            </div>
                            <div class="arrow-icon"><i class="fa fa-angle-double-left" aria-hidden="true"></i>
                            </div>
                        </li>
                        <!--End Working process Single-->
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!--End Working process area -->

    <!--Start Faq Style1 Area-->
    <section class="faq-style1-area" id="ask">
        <div class="faq-style1-bg" style="background-image: url(assets/img/tt.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="faq-form-box">
                        <div class="pattern-bg" style="background-image: url(assets/img/pattern/thm-pattern-7.png);">
                        </div>
                        <div class="sec-title">
                            <div class="sub-title">
                                <h6 style="justify-content: end;"> </span>احصل على عرض أسعار </span> <span
                                        class="border-right"></span></h6>
                            </div>
                            <h2>استشارة مجانية</h2>
                            <p>من فضلك قم بملء النموذج وتقديم تفاصيل طلبك وسوف نقوم بالرد عليك.</p>
                        </div>
                        <form id="contact-form"class="default-form1" method="POST"
                            action="{{ route('message.store') }}">
                            @csrf
                            <div class="input-box">
                                <input type="text" name="name" placeholder="الاسم" required>
                            </div>
                            <div class="input-box">
                                <input type="email" name="email" placeholder="البريد الالكتروني" required>
                            </div>
                            <div class="input-box">
                                <input type="hidden" name="phone" value="Unknown Number" required>
                            </div>
                            <div class="input-box">
                                <input type="hidden" name="address" value="Unknown" required>
                            </div>
                            <div class="input-box">
                                <div class="select-box">
                                    <select class="wide" name="service">
                                        <option data-display="الخدمة التي تحتاجها" disabled>الخدمة التي تحتاجها</option>
                                        <option value="استفسار عن السعر">استفسار عن السعر</option>
                                        <option value="استشارة">استشارة</option>
                                        <option value="طلب منتج">طلب منتج</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-box">
                                <textarea name="message" placeholder="...تفاصيل" required></textarea>
                            </div>
                            {{-- <button class="btn btn-success">Submit</button> --}}

                            <div class="button-box">
                                <button class="btn-one" type="submit" data-loading-text="Done...">
                                    <span class="txt">ارسال</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 text-right-rtl">
                    <div class="faq-style1-content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h6 style="justify-content: end;"> </span> اسألة واجابات شائعة </span> <span
                                        class="border-right"></span></h6>
                            </div>
                            <h2>احصل على إجابات مفصلة</h2>
                        </div>
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <div class="icon-outer"><i class="flaticon-down-arrow-2"></i></div>
                                    <h3> ماهي تكلفة الاكلريك الخشن للمتر ؟</h3>
                                </div>
                                <div class="acc-content current">
                                    <p>الاكريليك هو عبارة عن مادة بلاستيكية شفافة تتشابه إلى حد كبير مع الزجاج من حيث
                                        الشفافية والوضوح كما تُعرف كيميائياً أيضًا بإسم Poly Methyl Methacrylate أو باختصار
                                        PMMA، حيث تعتبر أحد المواد الغير سامة التي تتميز بملمس ناعم.</p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="flaticon-down-arrow-2"></i></div>
                                    <h3>ماهي مادة الجرافيتو </h3>
                                </div>
                                <div class="acc-content">
                                    <p>الاكريليك هو عبارة عن مادة بلاستيكية شفافة تتشابه إلى حد كبير مع الزجاج من حيث
                                        الشفافية والوضوح كما تُعرف كيميائياً أيضًا بإسم Poly Methyl Methacrylate أو باختصار
                                        حيث تعتبر أحد المواد الغير سامة التي تتميز بملمس ناعم.</p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="flaticon-down-arrow-2"></i></div>
                                    <h3>كيف يتم تحديد الالوان</h3>
                                </div>
                                <div class="acc-content">
                                    <p>الاكريليك هو عبارة عن مادة بلاستيكية شفافة تتشابه إلى حد كبير مع الزجاج من حيث
                                        الشفافية والوضوح كما تُعرف كيميائياً أيضًا بإسم Poly Methyl Methacrylate أو باختصار
                                        حيث تعتبر أحد المواد الغير سامة التي تتميز بملمس ناعم.</p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-outer"><i class="flaticon-down-arrow-2"></i></div>
                                    <h3>ماهي المواد الخام للطلاء</h3>
                                </div>
                                <div class="acc-content">
                                    <p>الاكريليك هو عبارة عن مادة بلاستيكية شفافة تتشابه إلى حد كبير مع الزجاج من حيث
                                        الشفافية والوضوح كما تُعرف كيميائياً أيضًا بإسم Poly Methyl Methacrylate أو باختصار
                                        حيث تعتبر أحد المواد الغير سامة التي تتميز بملمس ناعم.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Faq Style1 Area-->

    <!--Start Testimonials Style1 area -->
    <section class="testimonials-style1-area" id="testimonials">
        <div class="container">
            <div class="sec-title center text-center">
                <div class="sub-title">
                    <h6><span class="border-left"></span> أراء العملاء <span class="border-right"></span></h6>
                </div>
                <h2>شركاء النجاح</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonials-style1__content wow fadeInUp" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="theme_carousel testimonials-carousel_1 owl-dot-style1 owl-theme owl-carousel"
                            data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": false, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "1" }, "1200":{ "items" : "2" }}}'>
                            <!--Start Single Testimonials Style1-->

                            @foreach ($testimonials as $item)
                                <div class="single-testimonials-style1">
                                    <div class="img-holder">
                                        <div class="top-pattern-bg"
                                            style="background-image: url(assets/img/pattern/thm-pattern-4.png);">
                                        </div>
                                        <div class="bottom-pattern-bg"
                                            style="background-image: url(assets/img/pattern/thm-pattern-5.png);">
                                        </div>
                                        <div class="img-box">
                                            <img src="{{ asset($item->image) }}" alt="" />
                                        </div>
                                        <div class="review-box">
                                            @php
                                                $rate = $item->rate;
                                                $starCount = $rate / 20; // Assuming the rate is out of 100
                                            @endphp
                                            @for ($i = 0; $i < $starCount; $i++)
                                                <i class="fa fa-star" style = "color:gold"></i>
                                            @endfor
                                            @for ($i = 4; $i > $starCount; $i--)
                                                <i class="fa fa-star" style = "color:#6b6b6b"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="name">
                                                <div class="icon">
                                                    <span class="flaticon-quote-3"></span>
                                                </div>
                                                <h3>{{ $item->name }}</h3>
                                                <span>{{ $item->address }}</span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>{!! $item->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!--End Single Testimonials Style1-->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Testimonials Style1 area -->

    <!--Start Contact Info Style1 Area-->
    <section class="contact-info-style1-area" id="contact">
        <div class="contact-info-area__bg" style="background-image: url(assets/img/tisti.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-info__box paroller-2">
                        <div class="sec-title center text-center wow slideInDown" data-wow-delay="100ms"
                            data-wow-duration="1500ms">
                            <div class="sub-title">
                                <h6><span class="border-left"></span> تواصل <span class="border-right"></span></h6>
                            </div>
                        </div>
                        @php
                            use App\Models\Sitting;
                            $data = Sitting::all();
                        @endphp
                        @foreach ($data as $data)
                            <h2><a href="tel:{{ $data->phone_number }}">{{ $data->phone_number }}</a></h2>

                            <p></p>
                            <div class="btn-box wow slideInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                                <a class="btn-one" href="tel:{{ $data->phone_number }}">
                                    <span class="txt">أتصل بنا</span>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Info Style1 Area-->

    <!--Start Blog Style1 Area-->
    <section id="blogs" class="blog-style1-area">
        <div class="container">
            <div class="blog-top-title">
                <div class="sec-title">
                    <div class="sub-title">
                        <h6><span class="border-right"></span>اخبار وتحديثات</h6>
                    </div>
                    <h2>اخر الاخبار</h2>
                </div>
                <div class="blog-style1__button">
                    <a class="btn-one" href="blog.html">
                        <span class="txt">جميع المنشورات</span>
                    </a>
                </div>
            </div>

            <div class="row text-right-rtl">
                <!--Start Single blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/img/blog/blog-v1-1.jpg" alt="">
                            </div>
                            <div class="categories-date-box">
                                <div class="categories-box">
                                    <h6><span class="flaticon-open-archive"></span>Maintenance</h6>
                                </div>
                                <div class="date-box">
                                    <h3>20<br><span>Jul</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">
                                <a href="blog-single.html">Protecting Your Roof From Storm Damage</a>
                            </h3>
                            <div class="text">
                                <p>Prevents our being able do what we like best every pleasure avoided...</p>
                            </div>
                            <div class="bottom-box">
                                <div class="pattern-bg"
                                    style="background-image: url(assets/img/pattern/thm-pattern-7.png);"></div>
                                <div class="left">
                                    <a class="btn-two" href="blog-single.html">اعرف اكثر</a>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                        <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single blog Style1-->
                <!--Start Single blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/img/blog/blog-v1-2.jpg" alt="">
                            </div>
                            <div class="categories-date-box">
                                <div class="categories-box">
                                    <h6><span class="flaticon-open-archive"></span>Tips & Tricks</h6>
                                </div>
                                <div class="date-box">
                                    <h3>10<br><span>Jul</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">
                                <a href="blog-single.html">How To Weather Proof Your Roof This Winter?</a>
                            </h3>
                            <div class="text">
                                <p>Mistaken idea denouncing pleasure and praising pain was complete...</p>
                            </div>
                            <div class="bottom-box">
                                <div class="pattern-bg"
                                    style="background-image: url(assets/img/pattern/thm-pattern-7.png);"></div>
                                <div class="left">
                                    <a class="btn-two" href="blog-single.html">اعرف اكثر</a>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                        <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single blog Style1-->

                <!--Start Single blog Style1-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-blog-style1 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/img/blog/blog-v1-3.jpg" alt="">
                            </div>
                            <div class="categories-date-box">
                                <div class="categories-box">
                                    <h6><span class="flaticon-open-archive"></span>Roof Leaks</h6>
                                </div>
                                <div class="date-box">
                                    <h3>30<br><span>Jun</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title">
                                <a href="blog-single.html">The 5 Most Common Causes Of Roof Leaks</a>
                            </h3>
                            <div class="text">
                                <p>No one rejects dislikes or avoids pleasure itself because it is pleasure...</p>
                            </div>
                            <div class="bottom-box">
                                <div class="pattern-bg"
                                    style="background-image: url(assets/img/pattern/thm-pattern-7.png);"></div>
                                <div class="left">
                                    <a class="btn-two" href="blog-single.html">اعرف اكثر</a>
                                </div>
                                <div class="right">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-heart-o"></span>10</a></li>
                                        <li><a href="#"><span class="fa fa-share-alt share"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single blog Style1-->
            </div>
        </div>
    </section>
    <!--End Blog Style1 Area-->

    <!--Start Main Contact Form Area-->
    <section class="main-contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="contact-style1_form">
                        <div class="top-title">
                            <h2>ارسل لنا</h2>
                            <p>من فضلك ارسل لنا ما تحتاجه, سنكون سعدعاء بالرد عليك في اقرب وقت</p>
                        </div>
                        <div class="contact-form">
                            <form id="contact-form"class="default-form1" method="POST"
                                action="{{ route('message.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="input-box col">
                                        <input type="text" name="name" placeholder="الاسم" required>
                                    </div>
                                    <div class="input-box col">
                                        <input type="email" name="email" placeholder="البريد الالكتروني" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-box col">
                                        <input type="text" name="phone" placeholder="رقم الهاتف" required>
                                    </div>
                                    <div class="input-box col">
                                        <input type="text" name="address" placeholder="العنوان" required>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <div class="select-box">
                                        <select class="wide" name="service">
                                            <option data-display="الخدمة التي تحتاجها" disabled>الخدمة التي تحتاجها
                                            </option>
                                            <option value="استفسار عن السعر">استفسار عن السعر</option>
                                            <option value="استشارة">استشارة</option>
                                            <option value="طلب منتج">طلب منتج</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <textarea name="message" placeholder="...تفاصيل" required></textarea>
                                </div>
                                <div class="button-box">
                                    <button class="btn-one" type="submit" data-loading-text="Done...">
                                        <span class="txt">ارسال</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contact-page-map-outer">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27628.454402089425!2d31.414972584439898!3d30.049570392392578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583d7e9d54ed9f%3A0x93996d766a7ce17d!2z2KLYrtixINmD2YjYqNix2Yog2KfZhNiq2KzZhdi5INin2YTYo9mI2YQoINmF2K3ZiNixINmF2LXYt9mB2Ykg2YPYp9mF2YQgKSDYqNi52K8g2KPZg9in2K_ZitmF2YrYqSDYp9mE2LTYsdi32KkgKCDYqNin2LPZhSAp!5e0!3m2!1sen!2seg!4v1729691604202!5m2!1sen!2seg"
                            width="100%" height="666px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Main Contact Form Area-->
@endsection
