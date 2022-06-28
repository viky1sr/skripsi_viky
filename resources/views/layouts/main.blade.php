<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:400,700|Crete+Round:400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset(config('sentence.cvs_bootstrap_css'))}}" type="text/css" />
    <link rel="stylesheet" href="{{asset(config('sentence.cvs_style_css'))}}" type="text/css" />
    <link rel="stylesheet" href="{{asset(config('sentence.cvs_swiper_css'))}}" type="text/css" />

    <link rel="stylesheet" href="{{asset(config('sentence.cvs_medical_css'))}}" type="text/css" />

    <link rel="stylesheet" href="{{asset(config('sentence.cvs_dark_css'))}}" type="text/css" />
    <link rel="stylesheet" href="{{asset(config('sentence.cvs_fonts_css'))}}" type="text/css" />
    <link rel="stylesheet" href="{{asset(config('sentence.cvs_medical-icons_css'))}}" type="text/css" />
    <link rel="stylesheet" href="{{asset(config('sentence.cvs_animate_css'))}}" type="text/css" />
    <link rel="stylesheet" href="{{asset(config('sentence.cvs_magnific-popup_css'))}}" type="text/css" />

    <link rel="stylesheet" href="{{asset(config('sentence.cvs_fonts_css'))}}" type="text/css" />

    <link rel="stylesheet" href="{{asset(config('sentence.cvs_custom_css'))}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset(config('sentence.cvs_color_php'))}}" type="text/css" />
{{--    <link rel="stylesheet" href="{{asset('cork/plugins/font-icons/fontawesome/css/fontawesome.css')}}" type="text/css" />--}}

    <link rel="stylesheet" href="{{asset('cork/plugins/font-icons/fontawesome/css/regular.css')}}">
    <link rel="stylesheet" href="{{asset('cork/plugins/font-icons/fontawesome/css/fontawesome.css')}}">
    @toastr_css
    <title>{{config('sentence.title_web')}}</title>
</head>

<body class="stretched page-transition" data-loader-html="<div id='css3-spinner-svg-pulse-wrapper'><svg id='css3-spinner-svg-pulse' version='1.2' height='210' width='550' xmlns='https://www.w3.org/2000/svg' viewport='0 0 60 60' xmlns:xlink='https://www.w3.org/1999/xlink'><path id='css3-spinner-pulse' stroke='#DE6262' fill='none' stroke-width='2' stroke-linejoin='round' d='M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210' /></svg></div>">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar">
        <div class="container clearfix">

            <div class="row justify-content-between">
                <div class="col-12 col-md-auto d-none d-md-flex">

                    <!-- Top Links
                    ============================================= -->
                    <div class="top-links">
                        <ul class="top-links-container">
                            <li class="top-links-item"><a href="#"><i class="icon-time"></i> Timings</a></li>
                            <li class="top-links-item">
                                <a
                                    href="tel:+6281319599677" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});"
                                ><i class="icon-phone3"></i> +62-813-1959-9677</a></li>
                            <li class="top-links-item"><a href="#" class="nott"><i class="icon-envelope2"></i>vieramomandbabyspa@gmail.com</a></li>
                        </ul>
                    </div><!-- .top-links end -->

                </div>

                <div class="col-12 col-md-auto">

                    <!-- Top Links
                    ============================================= -->
                    <div class="top-links">
                        <ul class="top-links-container">
                            <li class="top-links-item"><a href="{{config('sentence.chat_wa')}}" class="bg-color text-white">WhatsApp</a></li>
                            <li class="top-links-item"><a href="https://www.instagram.com/vieramomandbabyspa/" class="bg-color text-white">Instagram</a></li>
                        </ul>
                    </div><!-- .top-links end -->

                </div>
            </div>

        </div>
    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    @include('layouts.frontend.header')
    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element swiper_wrapper min-vh-50 min-vh-md-100" data-loop="true" data-autoplay="5000">
        <div class="slider-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="slider-caption slider-caption-right" style="max-width: 700px;">
                                <div>
                                    <h2 data-animate="flipInX">Home Care<span>.</span></h2>
                                    <p class="d-none d-sm-block" data-animate="flipInX" data-delay="500">Our Team of Doctors are specialized in Various Disciplines to make sure you get the Best Treatment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background-image: url({{asset('canvas/medical/images/slider/1.jpg')}});"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="slider-caption">
                                <div>
                                    <h2 data-animate="zoomIn">Baby<span>SPA</span>.</h2>
                                    <p class="d-none d-sm-block" data-animate="zoomIn" data-delay="500">Ayo manjakan si buah hati tersayang dengan Treatment massage dan SPA khusus yang dapat meningkatkan kesehatan dan perkembangan bayi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background-image: url({{asset('canvas/medical/images/slider/babyspa.jpg')}});"></div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #slider end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            @yield('content')
        </div>
    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" style="background-color: #F5F5F5; border-top: 2px solid rgba(0,0,0,0.06);">
        @include('layouts.frontend.footer')
    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up rounded-circle"></div>

@jquery
@toastr_js
@toastr_render

<!-- JavaScripts
============================================= -->
<script src="{{asset('canvas/js/jquery.js')}}"></script>
<script src="{{asset('canvas/js/plugins.min.js')}}"></script>

<script src="{{asset('cork/plugins/font-icons/feather/feather.min.js')}}"></script>

<script type="text/javascript">
    feather.replace();
</script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('canvas/js/functions.js')}}"></script>

@yield('script')

</body>
</html>
