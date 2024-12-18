<head>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MHZXXTZ4');</script>
    <!-- End Google Tag Manager -->


    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">


        <link rel="stylesheet" href ="{{ asset('assets') }}/css/animate.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/aos.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/bootstrap.min.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/bootstrap-select.min.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/custom-animate.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/fancybox.min.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/flaticon.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/font-awesome.min.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/imp.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/jquery-ui.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/magnific-popup.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/owl.css">
        <link rel="stylesheet" href ="{{ asset('assets') }}/css/rtl.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/scrollbar.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/icomoon.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/nice-select.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bxslider.css">

    <!-- Module css -->
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/header-section.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/banner-section.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/about-section.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/blog-section.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/fact-counter-section.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/faq-section.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/contact-page.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/breadcrumb-section.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/partner-section.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/testimonial-section.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/services-section.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/module-css/footer-section.css">

    <link href ="{{ asset('assets') }}/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href ="{{ asset('assets') }}/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="20x180" href ="{{ asset('assets') }}/img/logo.png">
    <link rel="icon" type="image/png" href ="{{ asset('assets') }}/img/logo.png">
    <link rel="icon" type="image/png" href ="{{ asset('assets') }}/img/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta property="og:image" content="{{ asset('assets/img/logo.png') }}">

    <!-- Google Tag Manager -->
    {{-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5RV7LQ7Q');
    </script> --}}
    <!-- End Google Tag Manager -->

</head>
