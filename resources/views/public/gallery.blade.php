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

    <!-- Section Gallery -->
    <section class="section kf-gallery">
        <div class="container">

            <div class="kf-titles align-center">
                <div class="kf-subtitle element-anim-1 scroll-animate" data-animate="active">
                    Photo Gallery
                </div>
                <h3 class="kf-title element-anim-1 scroll-animate" data-animate="active">
                    Look The Photo Gallery
                </h3>
            </div>

            {{-- <div class="kf-filter kf-filter-gal element-anim-1 scroll-animate" data-animate="active">
                <a href="#" data-href=".all" class="active">View all</a>
                <a href="#" data-href=".fast-food">fast food</a>
                <a href="#" data-href=".hot-coffee">Hot coffee</a>
                <a href="#" data-href=".dinner-menu">Dinner menu</a>
                <a href="#" data-href=".special-pizza">Special pizza</a>
            </div> --}}

            <div class="kf-gallery-items row">
                @foreach (Storage::disk('public')->files('gallery') as $item)
                    <div class="kf-gallery-col col-xs-12 col-sm-12 col-md-6 col-lg-4 all fast-food">
                        <div class="kf-gallery-item element-anim-1 scroll-animate" data-animate="active">
                            <div class="image kf-image-hover">
                                <a href="{{ Storage::disk('public')->url($item) }}" class="has-popup-gallery"><img
                                        src="{{ Storage::disk('public')->url($item) }}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>
@endsection
