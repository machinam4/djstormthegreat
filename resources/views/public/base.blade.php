<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>DJ Storm The Great</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Oswald:wght@200;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- BEGIN CSS STYLES -->
    <link rel="stylesheet" href="{{ asset('assets/styles/bootstrap.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/line-awesome.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('assets/styles/animate.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/styles/magnific-popup.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/styles/splitting.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/styles/swiper.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" type="text/css" media="all" />
    <!-- END CSS STYLES -->

</head>

<body>
    <div class="bg">

        <!-- Preloader -->
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner-logo">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" />
                        <div class="spinner-dot">
                            <div class="spinner-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header class="kf-header">

            <!-- topline -->
            <div class="kf-topline">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                        <!-- hours -->
                        <div class="kf-h-group">
                            <i class="far fa-clock"></i>
                            <em>New Event :</em> Past Five Mercury Lounge
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 align-right">

                        <!-- location -->
                        <div class="kf-h-group">
                            <i class="fas fa-map-marker-alt"></i>
                            <em>Location :</em> Mercury Lounge, ABC Place
                        </div>

                    </div>
                </div>
            </div>

            <!-- navbar -->
            <div class="kf-navbar">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                        <!-- logo -->
                        <div class="kf-logo">
                            <a href="{{ Route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                    alt="" /></a>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 align-center">

                        <!-- main menu -->
                        <div class="kf-main-menu">
                            <ul>
                                <li>
                                    <a href="{{ Route('home') }}">Home</a>
                                </li>
                                <li><a href="{{ Route('about') }}">About</a></li>
                                <li><a href="{{ Route('gallery') }}">Gallery</a></li>
                                <li><a href="{{ Route('contact') }}">Contacts</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 align-right">

                        <!-- menu btn -->
                        <a href="#" class="kf-menu-btn"><span></span></a>

                        <!-- btn -->
                        <a href="{{ Route('home') }}" class="kf-btn h-btn">
                            <span>Book Me</span>
                        </a>

                    </div>
                </div>
            </div>

            <!-- mobile navbar -->
            <div class="kf-navbar-mobile">

                <!-- mobile menu -->
                <div class="kf-main-menu">
                    <ul>
                        <li class="has-children">
                            <a href="{{ Route('home') }}">Home</a>
                        </li>
                        <li><a href="{{ Route('about') }}">About</a></li>
                        {{-- <li><a href="{{ Route('home') }}">Events</a></li> --}}
                        <li><a href="{{ Route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ Route('contact') }}">Contacts</a></li>
                    </ul>
                </div>

                <!-- mobile topline -->
                <div class="kf-topline">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <!-- mobile btn -->
                            <a href="{{ Route('home') }}" class="kf-btn h-btn">
                                <span>Book Me</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <!-- social -->
                            <div class="kf-h-social">
                                <a href="facebook.html" target="blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="twitter.html" target="blank"><i class="fab fa-twitter"></i></a>
                                <a href="instagram.html" target="blank"><i class="fab fa-instagram"></i></a>
                                <a href="youtube.html" target="blank"><i class="fab fa-youtube"></i></a>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <!-- hours -->
                            <div class="kf-h-group">
                                <i class="far fa-clock"></i>
                                <em>Upcoming Event:</em> Past Five Friday
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <!-- location -->
                            <div class="kf-h-group">
                                <i class="fas fa-map-marker-alt"></i>
                                <em>Location :</em> Mercury Lounge, ABC Place
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </header>

        <!-- Wrapper -->
        <div class="wrapper">

            @yield('contents')

            <!-- Section CTA -->
            <section class="section kf-cta kf-parallax"
                style="background-image: url({{ asset('assets/images/cta_bg.jpg') }});">
                <div class="container">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">

                            <div class="kf-titles">
                                <div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
                                    Need a DJ for your Event On Coffee House
                                </div>
                                <h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
                                    Booking DJ Storm The Great
                                </h3>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 align-self-center align-right">

                            <a href="{{ Route('home') }}" class="kf-btn element-anim-1 scroll-animate"
                                data-animate="active">
                                <span>Booking availability</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>

                        </div>
                    </div>

                </div>
            </section>

            <!-- Section Brands -->
            <div class="section kf-brands">
                <div class="container">
                    <div class="kf-brands-items row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
                            <div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <img src="{{ asset('assets/images/brands/MERCURY LOGO.webp') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
                            <div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <img src="{{ asset('assets/images/brands/MNE Logo.webp') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
                            <div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <img src="{{ asset('assets/images/brands/Jack_Daniels_Logo.svg.webp') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
                            <div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <img src="{{ asset('assets/images/brands/Kenya Breweries Ltd.webp') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
                            <div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <img src="{{ asset('assets/images/brands/Glenfiddich-logo.webp') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
                            <div class="kf-brands-item element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <img src="{{ asset('assets/images/brands/Jameson logo.webp') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- Footer -->
        <div class="kf-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

                        <!-- logo -->
                        <div class="kf-logo element-anim-1 scroll-animate" data-animate="active">
                            <a href="{{ Route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                    alt="" /></a>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

                        <!-- hours -->
                        <div class="kf-f-hours element-anim-1 scroll-animate" data-animate="active">
                            <h5>Working Hours</h5>
                            <ul>
                                <li>
                                    Sunday - Thursday
                                    <em>08:00 am - 09:00pm</em>
                                </li>
                                <li>
                                    Only Friday
                                    <em>03:00 pm - 09:00pm</em>
                                </li>
                                <li>
                                    <strong>Saturday Close</strong>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

                        <!-- contact -->
                        <div class="kf-f-contact element-anim-1 scroll-animate" data-animate="active">
                            <h5>Contact Us</h5>
                            <ul>
                                <li>
                                    <i class="las la-map-marker"></i>
                                    <em>Location :</em>
                                    Mercury Lounge, ABC Place
                                </li>
                                <li>
                                    <i class="las la-envelope-open-text"></i>
                                    <em>Email Address :</em>
                                    djstormthegreat@gmail.com
                                </li>
                                <li>
                                    <i class="las la-phone"></i>
                                    <em>Phone Number :</em>
                                    +012 (345) 678 99
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">

                        <!-- gallery -->
                        <div class="kf-f-gallery element-anim-1 scroll-animate" data-animate="active">
                            <h5>Gallery</h5>
                            <ul>
                                <li>
                                    <a href="{{ asset('assets/images/events/storm_event (1).jpeg') }}"
                                        class="kf-image-hover has-popup-image"><img
                                            src="{{ asset('assets/images/events/storm_event (1).jpeg') }}"
                                            alt="" /></a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/events/storm_event (2).jpeg') }}"
                                        class="kf-image-hover has-popup-image"><img
                                            src="{{ asset('assets/images/events/storm_event (2).jpeg') }}"
                                            alt="" /></a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/events/storm_event (3).jpeg') }}"
                                        class="kf-image-hover has-popup-image"><img
                                            src="{{ asset('assets/images/events/storm_event (3).jpeg') }}"
                                            alt="" /></a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/events/storm_event (4).jpeg') }}"
                                        class="kf-image-hover has-popup-image"><img
                                            src="{{ asset('assets/images/events/storm_event (4).jpeg') }}"
                                            alt="" /></a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/events/storm_event (5).jpeg') }}"
                                        class="kf-image-hover has-popup-image"><img
                                            src="{{ asset('assets/images/events/storm_event (5).jpeg') }}"
                                            alt="" /></a>
                                </li>
                                <li>
                                    <a href="{{ asset('assets/images/events/storm_event (6).jpeg') }}"
                                        class="kf-image-hover has-popup-image"><img
                                            src="{{ asset('assets/images/events/storm_event (6).jpeg') }}"
                                            alt="" /></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">

                        <!-- copyright -->
                        <div class="kf-copyright element-anim-1 scroll-animate" data-animate="active">
                            Copyright © 2022 DJ Storm The Great. Crafted by <a href="https://www.evoton.co.ke"
                                target="_blank">Evoton
                                Softwares</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/splitting.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrolla.js') }}"></script>
    <script src="{{ asset('assets/js/skrollr.js') }}"></script>
    <script src="{{ asset('assets/js/common.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125314689-11"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-125314689-11');
    </script>

    <!-- bslthemes.com buttons html begin -->
    <div class="bsl-popup" data-theme="kaffen" data-category="html">
        <div class="bsl-popup__buttons"></div>
        <div class="bsl-popup__content bsl-popup__content-related">
            <div class="bsl-popup__menu"></div>
            <div class="bsl-popup__tabs">
                <div class="bsl-popup__tab bsl-popup__tab-demo"></div>
                <div class="bsl-popup__tab bsl-popup__tab-all"></div>
                <div class="bsl-popup__tab bsl-popup__tab-related"></div>
                <div class="bsl-popup__tab bsl-popup__tab-version"></div>
            </div>
        </div>
        <div class="bsl-popup__content bsl-popup__content-help"></div>
    </div>
    <!-- bslthemes.com buttons html end -->
</body>

</html>
