@extends('public.base')
@section('contents')
    <!-- Section Started Inner -->
    <section class="section kf-started-inner">
        <div class="kf-parallax-bg js-parallax"
            style="background-image: url({{ asset('assets/images/pics/storm_banner.webp') }});"></div>
        <div class="container">

            <h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
                About Storm
            </h1>

        </div>
    </section>

    <!-- Section About-2 -->
    <section class="section kf-choose kf-choose-2">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 align-self-center">

                    <div class="kf-titles">
                        <div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
                            About Dj Storm The Great
                        </div>
                        <h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
                            Proffessional Summary
                        </h3>
                    </div>

                    <div class="kf-text element-anim-1 scroll-animate" data-animate="active">
                        <p>
                            <strong>Brian Muchiri</strong> (DJ Storm), a Kenyan DJ, Producer and influencer. He is known as
                            one of the best
                            DJs in Kenya and is considered one of the most creative on the scene constantly raising the bar
                            of mundane DJ sets. He has worked with some of the nation’s leading brands including Jack
                            Daniels, Jameson, Glenfiddich, Kenya Breweries Ltd, Grey Goose, Johnny Walker and Martel, to
                            name a few. He has appeared at widely attended events and venues throughout the city of Nairobi
                            as well as throughout Kenya. Having spent many years playing at all of the major popular
                            nightclubs (alongside local hard-hitters), holding multiple residencies, DJing special events
                            and promoting his shows. DJ Storm has had a lot of time to develop his sound. For him, it’s all
                            about mood, leading in hip hop and RnB music playing those tracks that get you tapping your feet
                            and nodding your head without you realizing it regardless of genre, tempo, style, or release
                            date. Don’t be surprised when you suddenly find yourself dancing.
                        </p>
                    </div>
                    <div class="kf-text element-anim-1 scroll-animate" data-animate="active">
                        <p>
                            Keeping people happy on the dance floor is DJ Storm’s motive, and his ability to mix across
                            multiple genres – from Afro to hip-hop, RNB to funk, oldies to pop – has proven to be a winner
                            night after night. Seamless transitions – with the occasional “Oh, no he didn’t; that’s my jam!”
                            surprise record dropped in from out of nowhere – DJ Storm keeps it simple: just play good music
                            at exactly the right time. And from private events to massive music festivals, and everything in
                            between, it’s established Storm as a one-of-a-kind party rocker.
                        </p>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 offset-lg-1">

                    <div class="kf-choose-image element-anim-1 scroll-animate" data-animate="active">
                        <img src="{{ asset('assets/images/pics/djstorm.webp') }}" alt="" />
                    </div>

                </div>
                <div class="kf-text element-anim-1 scroll-animate" data-animate="active">
                    <p>
                        DJ Storm began DJing while attending college at Homeboyz Radio Academy. Quickly graduating from
                        basement frat parties to Nairobi nightlife venues, DJ Storm developed his signature style opening
                        for each evening’s headlining DJ. “Every DJ should pay their dues and learn how to open,” Storm
                        says. “Anyone can rock a party playing current hits and party classics; opening is where you learn
                        how to program and build a dance floor. It’s where I learned how to mix a little spice into my sets
                        without clearing the floor.”
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Section Video -->
    <section class="section kf-video section-bg">
        <div class="container">
            <div class="kf-video-item kf-image-hover element-anim-1 scroll-animate"
                style="background-image: url({{ asset('assets/images/video_bg.jpg') }});" data-animate="active">
                <iframe class="js-video-iframe"
                    data-src="https://www.youtube.com/embed/Gu6z6kIukgg?showinfo=0&amp;rel=0&amp;autoplay=1"></iframe>
                <div class="play"><i class="fas fa-play"></i></div>
            </div>

        </div>
    </section>

    <!-- Section Services-2 -->
    <section class="section kf-services">
        <div class="container">

            <div class="kf-services-items-2 row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
                        <div class="image">
                            <img src="{{ asset('assets/images/service_icon1.png') }}" alt="" />
                        </div>
                        <div class="desc">
                            <h5 class="name">Birthdays</h5>
                            <div class="subname">Sed ut perspiciatis unde</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
                        <div class="image">
                            <img src="{{ asset('assets/images/service_icon2.png') }}" alt="" />
                        </div>
                        <div class="desc">
                            <h5 class="name">Barmtzfah</h5>
                            <div class="subname">Sed ut perspiciatis unde</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
                        <div class="image">
                            <img src="{{ asset('assets/images/service_icon3.png') }}" alt="" />
                        </div>
                        <div class="desc">
                            <h5 class="name">Weddings</h5>
                            <div class="subname">Sed ut perspiciatis unde</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="kf-services-item-2 element-anim-1 scroll-animate" data-animate="active">
                        <div class="image">
                            <img src="{{ asset('assets/images/service_icon4.png') }}" alt="" />
                        </div>
                        <div class="desc">
                            <h5 class="name">Club Events</h5>
                            <div class="subname">Sed ut perspiciatis unde</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
