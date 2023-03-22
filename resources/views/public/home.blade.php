@extends('public.base')
@section('contents')
    <!-- Section Started Slider -->
    <section class="section kf-started-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <div class="kf-started-item">
                        <div class="slide js-parallax"
                            style="background-image: url({{ asset('assets/images/storm_hero_1.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="description align-left element-anim-1">
                                <div class="subtitles">
                                    Welcome to Storm World
                                </div>
                                <h2 class="name text-anim-1" data-splitting="chars">
                                    The Greatest <br>Music DJ
                                </h2>
                                <div class="kf-bts">
                                    <a href="{{ Route('about') }}" class="kf-btn">
                                        <span>Biography</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a href="{{ Route('home') }}" class="kf-btn dark-btn">
                                        <span>Book</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="kf-started-item">
                        <div class="slide js-parallax"
                            style="background-image: url({{ asset('assets/images/storm_hero_2.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="description align-left element-anim-1">
                                <div class="subtitles">
                                    Welcome to Storm World
                                </div>
                                <h2 class="name text-anim-1" data-splitting="chars">
                                    The Greatest <br>Music DJ
                                </h2>
                                <div class="kf-bts">
                                    <a href="{{ Route('about') }}" class="kf-btn">
                                        <span>Biography</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a href="{{ Route('home') }}" class="kf-btn dark-btn">
                                        <span>Book</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">

                    <div class="kf-started-item">
                        <div class="slide js-parallax"
                            style="background-image: url({{ asset('assets/images/storm_hero_2.jpg') }});">
                        </div>
                        <div class="container">
                            <div class="description align-left element-anim-1">
                                <div class="subtitles">
                                    Welcome to Storm World
                                </div>
                                <h2 class="name text-anim-1" data-splitting="chars">
                                    The Greatest <br>Music DJ
                                </h2>
                                <div class="kf-bts">
                                    <a href="{{ Route('about') }}" class="kf-btn">
                                        <span>Biography</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                    <a href="{{ Route('home') }}" class="kf-btn dark-btn">
                                        <span>Book</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </section>

    <!-- Section About -->
    <section class="section kf-about section-bg">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">

                    <div class="kf-titles">
                        <div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
                            About
                        </div>
                        <h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
                            About DJ Storm
                        </h3>
                    </div>

                    <div class="kf-text element-anim-1 scroll-animate" data-animate="active">
                        <p>Brian Muchiri (DJ Storm), a Kenyan DJ, Producer and influencer. He
                            is known as one of the best DJs in Kenya and is considered one of the most creative
                            on the scene constantly raising the bar of mundane DJ sets. He has worked with some
                            of the nation’s leading brands including Jack Daniels, Jameson, Glenfiddich, Kenya
                            Breweries Ltd, Grey Goose, Johnny Walker and Martel, to name a few. He has appeared
                            at widely attended events and venues throughout the city of Nairobi as well as
                            throughout Kenya. Having spent many years playing at all of the major popular
                            nightclubs (alongside local hard-hitters), holding multiple residencies, DJing
                            special events and promoting his shows. DJ Storm has had a lot of time to develop
                            his sound.

                        </p>
                    </div>

                    <div class="kf-about-quote element-anim-1 scroll-animate" data-animate="active">
                        <img src="{{ asset('assets/images/storm_pic.JPG') }}" alt="" />
                        <div>“Anyone can rock a party playing current hits and party classics; opening is where
                            you learn how to program and build a dance floor.”</div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">

                    <div class="kf-about-image element-anim-1 scroll-animate" data-animate="active">
                        <img src="{{ asset('assets/images/storm_about.jpg') }}" alt="" />
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Section Menu -->
    <section class="section kf-menu kf-parallax"
        style="background-image: url({{ asset('assets/images/category_bg.jpg') }});">
        <div class="container">

            <div class="kf-titles align-center">
                <div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
                    Events & Gigs
                </div>
                <h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
                    Storm Upcoming Events & Gigs
                </h3>
            </div>

            <div class="kf-menu-items" style="background-image: url({{ asset('assets/images/menu_logo.png') }});">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/sortm_event (1).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/sortm_event (1).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Americano Coffee</h5>
                                <div class="subname">2/3 espresso, 1/3 streamed milk</div>
                                <div class="price">
                                    <a href="{{ Route('home') }}" class="kf-btn">
                                        <span>Ticket</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/sortm_event (2).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/sortm_event (2).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Espresso Coffee</h5>
                                <div class="subname">2/3 espresso, 1/3 streamed milk</div>
                                <div class="price"><a href="{{ Route('home') }}" class="kf-btn">
                                        <span>Ticket</span>
                                    </a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/sortm_event (3).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/sortm_event (3).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Barista Pouring Syrup</h5>
                                <div class="subname">2/3 espresso, 1/3 streamed milk</div>
                                <div class="price"><a href="{{ Route('home') }}" class="kf-btn">
                                        <span>Free</span>
                                    </a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/sortm_event (4).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/sortm_event (4).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Cold - Coffee</h5>
                                <div class="subname">2/3 espresso, 1/3 streamed milk</div>
                                <div class="price"><a href="{{ Route('home') }}" class="kf-btn">
                                        <span>Free</span>
                                    </a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/sortm_event (5).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/sortm_event (5).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Cappuccino Arabica</h5>
                                <div class="subname">2/3 espresso, 1/3 streamed milk</div>
                                <div class="price"><a href="{{ Route('home') }}" class="kf-btn">
                                        <span>Ticket</span>
                                    </a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="kf-menu-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/sortm_event (6).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/sortm_event (6).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Milk Cream Coffee</h5>
                                <div class="subname">2/3 espresso, 1/3 streamed milk</div>
                                <div class="price"><a href="{{ Route('home') }}" class="kf-btn">
                                        <span>Ticket</span>
                                    </a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Section Choose -->
    <section class="section kf-choose section-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 align-self-center">
                    <div class="kf-titles">
                        <div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
                            Booking Events
                        </div>
                        <h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
                            Get The Best <br />From The Greatest
                        </h3>
                    </div>

                    <div class="kf-text element-anim-1 scroll-animate" data-animate="active">
                        <p>
                            DJ storm, the Great, is skilled to perform at a wide range of events giving making
                            your event memorable with the smothest musics and attention to audience.
                        </p>
                    </div>

                    <div class="kf-choose-list">
                        <ul>
                            <li class="element-anim-1 scroll-animate" data-animate="active">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/choose_icon2.png') }}" alt="" />
                                </div>
                                <div class="desc">
                                    <h5 class="name">100% Client Satisfaction</h5>
                                    <div class="subname">
                                        From performing in clubs, weddings, graduations, barmitzfahs, dj Storm
                                        has been acquiring gratitude from the excellent services offered.
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <a href="{{ Route('home') }}" class="kf-btn element-anim-1 scroll-animate" data-animate="active">
                        <span>Book For Event</span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 offset-lg-1 align-self-center">
                    <div class="kf-services-items-2 row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <img src="{{ asset('assets/images/service_icon1.png') }}" alt="" />
                                </div>
                                <div class="desc">
                                    <h5 class="name">Club Event</h5>
                                    <div class="subname">Sed ut perspiciatis unde</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <img src="{{ asset('assets/images/service_icon2.png') }}" alt="" />
                                </div>
                                <div class="desc">
                                    <h5 class="name">Weddings</h5>
                                    <div class="subname">Sed ut perspiciatis unde</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <img src="{{ asset('assets/images/service_icon3.png') }}" alt="" />
                                </div>
                                <div class="desc">
                                    <h5 class="name">Graduation</h5>
                                    <div class="subname">Sed ut perspiciatis unde</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
                                <div class="image">
                                    <img src="{{ asset('assets/images/service_icon4.png') }}" alt="" />
                                </div>
                                <div class="desc">
                                    <h5 class="name">Barmtzfah</h5>
                                    <div class="subname">Sed ut perspiciatis unde</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Grid Carousel -->
    <section class="section kf-grid-carousel">
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="slide-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/storm_event (1).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/storm_event (1).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Latte</h5>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="slide-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/storm_event (2).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/storm_event (2).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Cappuccino</h5>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="slide-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/storm_event (3).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/storm_event (3).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Iced Coffee</h5>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="slide-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/storm_event (4).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/storm_event (4).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Espresso</h5>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="slide-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/storm_event (5).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/storm_event (5).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Black Coffee</h5>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="slide-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/storm_event (6).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/storm_event (6).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Latte</h5>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="slide-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/storm_event (7).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/storm_event (7).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Cappuccino</h5>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="slide-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/storm_event (8).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/storm_event (8).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Iced Coffee</h5>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="slide-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/storm_event (9).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/storm_event (9).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Espresso</h5>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="slide-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ asset('assets/images/events/storm_event (10).jpeg') }}"
                                    class="has-popup-image"><img
                                        src="{{ asset('assets/images/events/storm_event (10).jpeg') }}"
                                        alt="" /></a>
                            </div>
                            <div class="desc">
                                <h5 class="name">Black Coffee</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
