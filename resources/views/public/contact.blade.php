@extends('public.base')
@section('contents')
    <!-- Section Started Inner -->
    <section class="section kf-started-inner">
        <div class="kf-parallax-bg js-parallax"
            style="background-image: url({{ asset('assets/images/pics/storm_banner.webp') }});"></div>
        <div class="container">

            <h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
                Contact Me
            </h1>

        </div>
    </section>

    <!-- Section Contacts Info -->
    <section class="section kf-contacts-info">
        <div class="container">

            <div class="kf-contacts-items row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
                    <div class="kf-contacts-item element-anim-1 scroll-animate" data-animate="active">
                        <div class="image">
                            <!--<img src="images/contact_icon3.png" alt="" />-->
                            <i class="las la-headset"></i>
                        </div>
                        <div class="desc">
                            <h5 class="name">Phone Number</h5>
                            <ul>
                                <li>+254 745 979154<br>WhatsApp</li>
                                <li>+254 745 979154<br>WhatsApp</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
                    <div class="kf-contacts-item element-anim-1 scroll-animate" data-animate="active">
                        <div class="image">
                            <!--<img src="images/contact_icon2.png" alt="" />-->
                            <i class="las la-envelope-open-text"></i>
                        </div>
                        <div class="desc">
                            <h5 class="name">Email Address</h5>
                            <ul>
                                <li>djstormthegreat@gmail.com <br>www.djstormthegreat.com</li>
                                <li>djstormthegreat@gmail.com <br>www.djstormthegreat.com</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 align-center">
                    <div class="kf-contacts-item element-anim-1 scroll-animate" data-animate="active">
                        <div class="image">
                            <!--<img src="images/contact_icon1.png" alt="" />-->
                            <i class="las la-map-marked-alt"></i>
                        </div>
                        <div class="desc">
                            <h5 class="name">Main Location</h5>
                            <ul>
                                <li>55 Main Street, 2nd Block, <br>Nairobi, Kenya</li>
                                <li>394 Main Street, 2nd Block, <br>Nairobi, Kenya</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
@endsection
